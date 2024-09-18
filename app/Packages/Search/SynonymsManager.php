<?php

namespace App\Packages\Search;

use Elastic\Elasticsearch\Endpoints\Synonyms as ElasticSynonyms;
use Symfony\Component\Uid\Ulid;

class SynonymsManager
{
    private const SET_NAME = 'modelotoparca_synonyms';

    private readonly ElasticSynonyms $synonyms;

    public function __construct()
    {
        $this->synonyms = app(ElasticSynonyms::class);
    }

    private function mergeWords(array $words): string
    {
        return collect($words)->map(fn($s) => str_replace(',', '\\\\,', $s))->implode(',');
    }

    public function getSynonyms()
    {
        return $this->synonyms->getSynonym([
            "id" => self::SET_NAME,
            "size" => 10_000, // maximum set size
        ])->asArray()["synonyms_set"];
    }

    public function getSynonym(string $id)
    {
        return $this->synonyms->getSynonymRule([
            "set_id" => self::SET_NAME,
            "rule_id" => $id,
        ])->asArray()["synonyms"];
    }

    public function createSynonym(array $synonyms): void
    {
        $this->synonyms->putSynonymRule([
            "set_id" => self::SET_NAME,
            "rule_id" => Ulid::generate(),
            "body" => ["synonyms" => $this->mergeWords($synonyms)],
        ]);
    }

    public function deleteSynonym(string $id): void
    {
        $this->synonyms->deleteSynonymRule([
            "set_id" => self::SET_NAME,
            "rule_id" => $id,
        ]);
    }

    public function updateSynonym(string $id, array $synonyms): void
    {
        $this->synonyms->putSynonymRule([
            "set_id" => self::SET_NAME,
            "rule_id" => $id,
            "body" => ["synonyms" => $this->mergeWords($synonyms)],
        ]);
    }
}
