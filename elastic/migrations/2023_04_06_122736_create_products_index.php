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
            $mapping->text('slug');
            $mapping->keyword('part_number');
            $mapping->keyword('producercode');
            $mapping->keyword('cross_code');
            $mapping->keyword('producercode2');
            $mapping->keyword('similar_product_codes');
        });
    }

    /**
     * Reverse the migration.
     */
    public function down(): void
    {
        Index::dropIfExists("products-index");
    }
}
