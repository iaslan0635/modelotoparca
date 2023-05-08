<?php
declare(strict_types=1);

use Elastic\Adapter\Indices\Mapping;
use Elastic\Adapter\Indices\Settings;
use Elastic\Migrations\Facades\Index;
use Elastic\Migrations\MigrationInterface;

final class CreateProductsIndex implements MigrationInterface
{
    /**
     * Run the migration.
     */
    public function up(): void
    {
        Index::create('products_index', function (Mapping $mapping, Settings $settings) {
            $mapping->integer('id');
            $mapping->text('title');
            $mapping->text('sub_title');
            $mapping->text('slug');
            $mapping->text('fitting_position');
            $mapping->keyword('part_number');
            $mapping->keyword('producercode');
            $mapping->keyword('producercode_unbranded');
            $mapping->keyword('producercode_unbranded_regex');
            $mapping->keyword('cross_code');
            $mapping->keyword('producercode2');
            $mapping->keyword('part_number_regex');
            $mapping->keyword('producercode_regex');
            $mapping->keyword('cross_code_regex');
            $mapping->keyword('producercode2_regex');
            $mapping->double('price');
            $mapping->nested('oems', [
                'properties' => [
                    'oem' => ['type' => 'keyword'],
                    'oem_regex' => ['type' => 'keyword']
                ]
            ]);
            $mapping->nested('cars', [
                'properties' => [
                    'name' => [
                        'type' => 'text'
                    ]
                ]
            ]);
            $mapping->nested('categories', [
                'properties' => [
                    'name' => [
                        'type' => 'text'
                    ]
                ]
            ]);
            $mapping->nested('brand', [
                'properties' => [
                    'name' => [
                        'type' => 'text'
                    ]
                ]
            ]);
            $mapping->nested('similars', [
                'properties' => [
                    'code' => [
                        'type' => 'keyword'
                    ],
                    'code_regex' => [
                        'type' => 'keyword'
                    ]
                ]
            ]);

        });
    }

    /**
     * Reverse the migration.
     */
    public function down(): void
    {
        Index::dropIfExists("products_index");
    }
}
