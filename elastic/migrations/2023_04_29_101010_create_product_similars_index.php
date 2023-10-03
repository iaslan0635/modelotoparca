<?php

declare(strict_types=1);

use Elastic\Adapter\Indices\Mapping;
use Elastic\Adapter\Indices\Settings;
use Elastic\Migrations\Facades\Index;
use Elastic\Migrations\MigrationInterface;

final class CreateProductSimilarsIndex implements MigrationInterface
{
    /**
     * Run the migration.
     */
    public function up(): void
    {
        Index::create('product_similars_index', function (Mapping $mapping, Settings $settings) {
            $mapping->integer('id');
            $mapping->integer('product_id');
            $mapping->keyword('code');
            $mapping->keyword('code_regex');
        });
    }

    /**
     * Reverse the migration.
     */
    public function down(): void
    {
        Index::dropIfExists('product_similars_index');
    }
}
