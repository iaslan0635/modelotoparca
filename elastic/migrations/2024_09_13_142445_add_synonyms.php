<?php
declare(strict_types=1);

use Elastic\Adapter\Indices\Settings;
use Elastic\Elasticsearch\Endpoints\Indices;
use Elastic\Elasticsearch\Endpoints\Synonyms;
use Elastic\Migrations\Facades\Index;
use Elastic\Migrations\MigrationInterface;

final class AddSynonyms implements MigrationInterface
{
    /**
     * Run the migration.
     */
    public function up(): void
    {
        $synonyms = app(Synonyms::class);
        $synonyms->putSynonym([
            "id" => "modelotoparca_synonyms",
            "body" => [
                "synonyms_set" => [

                ]
            ],
        ]);

        $indices = app(Indices::class);

        $indices->close(["index" => "products_index"]);

        Index::putSettings('products_index', function (Settings $settings) {
            $settings->analysis([
                'filter' => [
                    'synonyms_filter' => [
                        'type' => 'synonym',
                        'synonyms_set' => 'modelotoparca_synonyms',
                        'updateable' => true,
                    ],
                ],
            ]);
        });

        $indices->open(["index" => "products_index"]);
    }

    /**
     * Reverse the migration.
     */
    public function down(): void
    {
        throw new \RuntimeException('Migration down is not supported.');
    }
}
