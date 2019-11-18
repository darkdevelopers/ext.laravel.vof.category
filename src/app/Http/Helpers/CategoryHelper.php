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
    public static function toHtml(array $categorys, bool $collapse = false, int $level = 0): string
    {
        $html = '<ul class="cd-accordion__sub cd-accordion__sub--l'.$level.'">';
        if (!$collapse) {
            $html = '<ul class="cd-accordion margin-top-lg margin-bottom-lg">';
        }

        foreach ($categorys as $category) {
            //d-flex justify-content-between align-items-center
            $child = 0;
            $class = '';
            if(array_key_exists('children', $category)){
                $child = count($category['children']);
            }


            $html .= '<li class="cd-accordion__item cd-accordion__item--has-children">
                       <input class="cd-accordion__input" type="checkbox" name ="'.$category['value'].$category['parent_id'].'" id="'.$category['value'].$category['parent_id'].'">
                        <label class="cd-accordion__label cd-accordion__label--icon-folder" for="'.$category['value'].$category['parent_id'].'"><span style="width:95%;">'.$category['value'].'</span><span class="badge badge-pill badge-light">'.$child.'</span></label>';
            if (array_key_exists('children', $category)) {
                $html .= self::toHtml($category['children'], true, $level + 1);
            }
            $html .= '</li>';
        }

        $html .= '</ul>';

        return $html;
    }
}
