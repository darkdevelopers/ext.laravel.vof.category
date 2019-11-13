<?php
/**
 * @author     Marco Schauer <marco.schauer@darkdevelopers.de.de>
 * @copyright  2019 Marco Schauer
 */

namespace Vof\Category\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Category
 * @package Vof\Category\Models
 */
class Category extends Model
{
    use SoftDeletes;

    /**
     * @var array
     */
    protected $with = ['categoryContent'];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'parent_id', 'active', 'include_in_menu'
    ];

    /**
     * @var array
     */
    protected $hidden = [
        'id', 'created_at', 'deleted_at', 'updated_at'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function categoryMeta()
    {
        return $this->hasOne(CategoryMeta::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function categoryContent()
    {
        return $this->hasOne(CategoryContent::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function categoryUrl()
    {
        return $this->hasOne(CategoryUrl::class);
    }
}
