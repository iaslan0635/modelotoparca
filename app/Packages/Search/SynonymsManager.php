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

    private function putRequest($body): void
    {
        $this->synonyms->putSynonym([
            "id" => self::SET_NAME,
            "body" => ["synonyms_set" => array_values($body)],
        ]);
    }

    public function getSynonyms()
    {
        return $this->synonyms->getSynonym([
            "id" => self::SET_NAME,
        ])->asArray()["synonyms_set"];
    }

    public function getSynonym(string $id)
    {
        return collect($this->getSynonyms())->first(fn($s) => $s["id"] === $id)["synonyms"];
    }

    public function createSynonym(array $synonyms): void
    {
        $this->putRequest([
            ...$this->getSynonyms(),
            [
                "synonyms" => $this->mergeWords($synonyms)
            ]
        ]);
    }

    public function deleteSynonym(string $id): void
    {
        $synonyms = $this->getSynonyms();
        $synonyms = array_filter($synonyms, fn($s) => $s["id"] !== $id);

        $this->putRequest($synonyms);
    }

    public function updateSynonym(string $id, array $synonyms): void
    {
        $updateIfMatches = fn($s) => $s["id"] == $id
            ? ["id" => $id, "synonyms" => $this->mergeWords($synonyms)]
            : $s;

        $updated = array_map($updateIfMatches, $this->getSynonyms());

        $this->putRequest($updated);
    }
}
