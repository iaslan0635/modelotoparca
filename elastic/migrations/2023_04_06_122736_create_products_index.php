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
            $mapping->text('part_number');
            $mapping->text('producercode');
            $mapping->text('cross_code');
            $mapping->text('producercode2');
            $mapping->text('similar_product_codes');
            $mapping->nested('oems', [
                'properties' => [
                    'oem' => [
                        'type' => 'text'
                    ]
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
