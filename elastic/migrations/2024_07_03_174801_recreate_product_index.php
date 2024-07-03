<?php
declare(strict_types=1);

use Elastic\Adapter\Indices\Mapping;
use Elastic\Adapter\Indices\Settings;
use Elastic\Migrations\Facades\Index;
use Elastic\Migrations\MigrationInterface;

final class RecreateProductIndex implements MigrationInterface
{
    /**
     * Run the migration.
     */
    public function up(): void
    {
        Index::dropIfExists('products_index');
        Index::create('products_index', function (Mapping $mapping, Settings $settings) {
            $settings->analysis([
                'analyzer' => [
                    'code_analyzer' => [
                        'type' => 'custom',
                        'tokenizer' => 'code_tokenizer',
                        'filter' => ['asciifolding', 'lowercase'],
                    ]
                ],
                'filter' => [],
                'tokenizer' => [
                    'code_tokenizer' => [
                        'type' => 'char_group',
                        'tokenize_on_chars' => ['whitespace', 'symbol', 'punctuation'],
                    ],
                ],
            ]);

            $codeAnalyzer = ['analyzer' => 'code_analyzer'];

            $mapping->text('title');
            $mapping->text('sub_title');
            $mapping->keyword('slug');
            $mapping->text('part_number', $codeAnalyzer);
            $mapping->text('producercode', $codeAnalyzer);
            $mapping->text('producercode_unbranded', $codeAnalyzer);
            $mapping->text('cross_code', $codeAnalyzer);
            $mapping->text('producercode2', $codeAnalyzer);
            $mapping->text('description');
            $mapping->text('oems', $codeAnalyzer);
            $mapping->text('cars');
            $mapping->text('categories');
            $mapping->text('brand');
            $mapping->text('similars', $codeAnalyzer);
            $mapping->text('hidden_searchable', $codeAnalyzer);

            $mapping->nested('brand', [
                'properties' => [
                    'id' => ['type' => 'keyword'],
                    'name' => ['type' => 'text'],
                ],
            ]);

            $mapping->nested('categories', [
                'properties' => [
                    'id' => ['type' => 'keyword'],
                    'name' => ['type' => 'text'],
                ],
            ]);

            $mapping->nested('cars', [
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
