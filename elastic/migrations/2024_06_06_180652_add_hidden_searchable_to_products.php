<?php
declare(strict_types=1);

use Elastic\Adapter\Indices\Mapping;
use Elastic\Migrations\Facades\Index;
use Elastic\Migrations\MigrationInterface;

final class AddHiddenSearchableToProducts implements MigrationInterface
{
    /**
     * Run the migration.
     */
    public function up(): void
    {
        Index::putMapping('products_index', function (Mapping $mapping) {
            $mapping->keyword('hidden_searchable');
        });
    }

    /**
     * Reverse the migration.
     */
    public function down(): void
    {
        //
    }
}
