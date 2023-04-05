<?php

namespace App\Facades;

use App\Models\Category;
use BlueM\Tree;
use Carbon\CarbonInterval;
use Illuminate\Support\Facades\Cache;

class CategoryFacade
{
    public static function getTree($selectId)
    {
        $data = Cache::remember("all_categories", TTL::MONTH, fn() => Category::query()->get(['id', 'parent_id'])->toArray());

        $tree = new Tree($data, [
            'rootId' => null,
            'id' => 'id',
            'parent' => 'parent_id'
        ]);
        $select = $tree->getNodeById($selectId);

        $ids = [];
        $parentIds = [];

        foreach ($select->getDescendantsAndSelf() as $node) {
            $ids[] = $node->getId();
        }

        foreach ($select->getAncestors() as $ancestor) {
            $parentIds[] = $ancestor->getId();
        }

        return ['childs' => $ids, 'parents' => $parentIds];
    }
}
