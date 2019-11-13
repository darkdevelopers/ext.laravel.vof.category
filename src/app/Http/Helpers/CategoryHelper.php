<?php
/**
 * @author     Marco Schauer <marco.schauer@darkdevelopers.de.de>
 * @copyright  2019 Marco Schauer
 */

namespace Vof\Category\Http\Helpers;

use Illuminate\Database\Eloquent\Collection;
use Vof\Category\Models\Category;

/**
 * Class CategoryHelper
 * @package Vof\Category\Http\Helpers
 */
class CategoryHelper
{
    /**
     * Transformation from Collection to display this Categorys
     *
     * @param Collection $categorys
     * @return array
     */
    public static function transformCategorys(Collection $categorys): array
    {
        /** @var array $categoryArray */
        $categoryArray = [];

        /** @var Category $category */
        foreach ($categorys as $category) {
            $categoryArray[] = ['id' => $category->getKey(), 'value' => $category->categoryContent->title, 'parent_id' => $category->parent_id];
        }

        usort($categoryArray, [self::class, "categorysort"]);

        return $categoryArray;
    }

    /**
     * Sorting function callback
     *
     * @param $a
     * @param $b
     * @return int|\lt
     */
    private static function categorysort($a, $b)
    {
        return strcmp($a["parent_id"], $b["parent_id"]);
    }
}
