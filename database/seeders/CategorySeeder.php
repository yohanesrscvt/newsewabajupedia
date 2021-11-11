<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Category::create([
            'name' => 'Pesta',
        ]);
        Category::create([
            'name' => 'Formal',
        ]);
        Category::create([
            'name' => 'Adat',
        ]);
        Category::create([
            'name' => 'Batik',
        ]);
        Category::create([
            'name' => 'Cosplay',
        ]);
        Category::create([
            'name' => 'Gaun',
        ]);
        Category::create([
            'name' => 'Jas',
        ]);
        Category::create([
            'name' => 'Baby',
        ]);
        Category::create([
            'name' => 'Others',
        ]);
    }
}
