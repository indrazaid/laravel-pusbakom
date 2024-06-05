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
        Category::create([

            'name'=>'Duta Bahasa',
            'slug'=>'duta-bahasa'
        ]);

        Category::create([

            'name'=>'Bulan Bahasa',
            'slug'=>'bulan-bahasa'
        ]);

        Category::create([

            'name'=>'UKBI Adaptif',
            'slug'=>'ukbi-adaptif'
        ]);
    }
}
