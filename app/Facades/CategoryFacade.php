<?php

namespace App\Facades;

use App\Models\Category;
use BlueM\Tree;
use Illuminate\Support\Facades\Cache;

class CategoryFacade
{
    public static function getTree($selectId)
    {
        $data = Cache::remember('all_categories', TTL::MONTH, fn() => Category::query()->get(['id', 'parent_id'])->toArray());

        $tree = new Tree($data, [
            'rootId' => null,
            'id' => 'id',
            'parent' => 'parent_id',
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

    public static function belirli_kelimeleri_kalin_yap($kelimeler, $text)
    {
        $kelimeler = preg_quote($kelimeler); // Özel karakterleri escape ediyoruz
        $pattern = '/(' . $kelimeler . ')/'; // Kalın yapılacak kelimelerin regex pattern'i
        $text = preg_replace_callback($pattern, function($matches) {
            return "<b>{$matches[0]}</b>"; // Kalın yapılacak kelimeleri bold tagleri ile sarıyoruz
        }, $text);

        // Belirli bir kelime sırasına göre text içindeki kelimeleri birleştiriyoruz
        $words = preg_split('/\s+/', $text);
        $result = '';
        foreach ($words as $word) {
            if (preg_match($pattern, $word)) {
                $result .= "<b>{$word}</b>";
            } else {
                $result .= $word;
            }
        }
        dd($result);
    }

}
