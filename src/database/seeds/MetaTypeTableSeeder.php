<?php
/**
 * @author     Marco Schauer <marco.schauer@darkdevelopers.de.de>
 * @copyright  2019 Marco Schauer
 */

namespace Vof\Category\Database\Seeder;

use Vof\Category\Models\CategoryMetaType;
use Illuminate\Database\Seeder;

class MetaTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CategoryMetaType::create([
            'type' => 'website'
        ]);
        CategoryMetaType::create([
            'type' => 'product'
        ]);
    }
}
