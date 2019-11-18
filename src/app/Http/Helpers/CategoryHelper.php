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

        $categoryArray = self::buildCategoryTree($categoryArray);

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

    /**
     * @param array $elements
     * @param int $parentId
     * @return array
     */
    private static function buildCategoryTree(array &$elements, int $parentId = 0): array
    {
        $branch = array();

        foreach ($elements as &$element) {
            if ($element['parent_id'] == $parentId) {
                $children = self::buildCategoryTree($elements, $element['id']);
                if ($children) {
                    $element['children'] = $children;
                }
                $branch[$element['id']] = $element;
                unset($element);
            }
        }

        return $branch;
    }

    /**
     * @param array $categorys
     * @return string
     */
    public static function toHtml(array $categorys): string
    {
        $html = '<ul>';

        foreach ($categorys as $category) {
            $html .= '<li>' . $category['value'] . '</li>';
            if (array_key_exists('children', $category)) {
                $html .= self::toHtml($category['children']);
            }
        }

        $html .= '</ul>';

        return $html;
    }
}
