<?php
declare(strict_types=1);

use Elastic\Adapter\Indices\Mapping;
use Elastic\Migrations\Facades\Index;
use Elastic\Migrations\MigrationInterface;

final class AddTecdocToProductsIndex implements MigrationInterface
{
    /**
     * Run the migration.
     */
    public function up(): void
    {
        Index::putMapping('products_index', function (Mapping $mapping) {
            $mapping->nested('tecdoc', [
                'properties' => [
                    'name' => ['type' => 'keyword'],
                    'name_regex' => ['type' => 'keyword'],
                ],
            ]);
        });
    }

    /**
     * Reverse the migration.
     */
    public function down(): void
    {
    }
}
