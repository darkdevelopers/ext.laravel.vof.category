<?php
/**
 * @author     Marco Schauer <marco.schauer@darkdevelopers.de.de>
 * @copyright  2019 Marco Schauer
 */

namespace Vof\Category\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CategoryContent
 * @package Vof\Category\Models
 */
class CategoryContent extends Model
{
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'description'
    ];

    /**
     * @var array
     */
    protected $hidden = [
        'category_id', 'created_at', 'deleted_at', 'updated_at'
    ];
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
