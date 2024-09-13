<?php

namespace App\Packages\Search;

use Elastic\Elasticsearch\Endpoints\Synonyms as ElasticSynonyms;

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
        return collect($words)->map(fn($s) => str_replace(',', '\\\\', $s))->implode(', ');
    }

    public function getSynonyms()
    {
        return $this->synonyms->getSynonym([
            "id" => self::SET_NAME,
        ]);
    }

    public function createSynonym(array $synonyms): void
    {
        $body = collect($synonyms)->map(fn($synonym) => ["synonyms" => $this->mergeWords($synonym)]);

        $this->synonyms->putSynonym([
            "id" => self::SET_NAME,
            "body" => $body->toArray(),
        ]);
    }

    public function deleteSynonym(int $id): void
    {
        $this->synonyms->putSynonym([
            "id" => self::SET_NAME,
            "body" => [["id" => $id]],
        ]);
    }

    public function updateSynonym(int $id, array $synonyms): void
    {
        $this->synonyms->putSynonym([
            "id" => self::SET_NAME,
            "body" => [[
                "id" => $id,
                "synonyms" => $this->mergeWords($synonyms),
            ]],
        ]);
    }
}
