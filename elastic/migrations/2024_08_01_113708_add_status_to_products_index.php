<?php

declare(strict_types=1);

use Elastic\Adapter\Indices\Mapping;
use Elastic\Migrations\Facades\Index;
use Elastic\Migrations\MigrationInterface;

final class AddStatusToProductsIndex implements MigrationInterface
{
    /**
     * Run the migration.
     */
    public function up(): void
    {
        Index::putMapping('products_index', function (Mapping $mapping) {
            $mapping->boolean('status');
        });
    }

    /**
     * Reverse the migration.
     */
    public function down(): void
    {

    }
}
