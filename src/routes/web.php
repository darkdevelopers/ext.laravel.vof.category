<?php
/**
 * @author     Marco Schauer <marco.schauer@darkdevelopers.de.de>
 * @copyright  2019 Marco Schauer
 */

Auth::routes();

Route::prefix('admin')->group(function () {
    Route::resource('/catalog/category', '\Vof\Category\Http\Controllers\CategoryController', [
        'names' => [
            'index' => 'category',
            'destroy' => 'category.destroy',
        ],
    ]);
});
