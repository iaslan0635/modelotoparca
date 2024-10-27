<?php

declare(strict_types=1);

use Elastic\Adapter\Indices\Mapping;
use Elastic\Adapter\Indices\Settings;
use Elastic\Elasticsearch\Endpoints\Synonyms;
use Elastic\Migrations\Facades\Index;
use Elastic\Migrations\MigrationInterface;

final class RecreateProductIndex implements MigrationInterface
{
    public function up(): void
    {
        app(Synonyms::class)->putSynonym(["id" => "modelotoparca_synonyms", "body" => ["synonyms_set" => [["synonyms"=>"kelime 1,kelime 2"]]]]);

        Index::dropIfExists('products_index');
        Index::create('products_index', function (Mapping $mapping, Settings $settings) {
            $settings->index([
                'mapping.nested_objects.limit' => '9000000000000000000',
            ]);

            $settings->analysis([
                'analyzer' => [
                    'default' => [
                        'type' => 'custom',
                        'tokenizer' => 'symbol_tokenizer',
                        'filter' => ['asciifolding', 'lowercase', 'remove_symbols'],
                    ],
                    'default_search' => [
                        'type' => 'custom',
                        'tokenizer' => 'symbol_tokenizer',
                        'filter' => ['asciifolding', 'lowercase', 'remove_symbols', 'synonyms_filter'],
                    ],
                ],
                'filter' => [
                    'synonyms_filter' => [
                        'type' => 'synonym',
                        'synonyms_set' => 'modelotoparca_synonyms',
                        'updateable' => true,
                    ],
                    "remove_symbols" => [
                        "type" => "pattern_replace",
                        "pattern" => "[^a-zA-Z0-9\\s]",
                        "replacement" => ""
                    ]
                ],
                'tokenizer' => [
                    'symbol_tokenizer' => [
                        'type' => 'char_group',
                        'tokenize_on_chars' => ['whitespace', 'symbol', 'punctuation'],
                    ],
                ],
            ]);

            $mapping->text('title');
            $mapping->text('sub_title');
            $mapping->keyword('slug');
            $mapping->text('part_number');
            $mapping->text('producercode');
            $mapping->text('producercode_unbranded');
            $mapping->text('cross_code');
            $mapping->text('producercode2');
            $mapping->text('description');
            $mapping->text('oems');
            $mapping->text('similars');
            $mapping->text('hidden_searchable');
            $mapping->double('price');
            $mapping->text('tecdoc');
            $mapping->boolean('status');

            $mapping->object('brand', [
                'properties' => [
                    'id' => ['type' => 'keyword'],
                    'name' => ['type' => 'text'],
                ],
            ]);

            $mapping->object('categories', [
                'properties' => [
                    'id' => ['type' => 'keyword'],
                    'name' => ['type' => 'text'],
                ],
            ]);

            $mapping->object('cars', [
                'properties' => [
                    'id' => ['type' => 'keyword'],
                    'name' => ['type' => 'text'],
                ],
            ]);
        });
    }

    /**
     * Reverse the migration.
     */
    public function down(): void
    {
        Index::dropIfExists('products_index');
    }
}
