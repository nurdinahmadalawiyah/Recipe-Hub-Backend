<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = [
            [
                'id' => 1,
                'id_category' => 1,
                'title' => 'Ayam',
                'image' => 'category_ayam.jpg',
            ],
            [
                'id' => 2,
                'id_category' => 2,
                'title' => 'Bebek',
                'image' => 'category_bebek.jpg',
            ],
            [
                'id' => 3,
                'id_category' => 3,
                'title' => 'Noodle',
                'image' => 'category_noodle.jpg',
            ],
            [
                'id' => 4, 
                'id_category' => 4,
                'title' => 'Sea Food',
                'image' => 'category_seafood.jpg',
            ],
            [
                'id' => 5,
                'id_category' => 5,
                'title' => 'Fast Food',
                'image' => 'category_fastfood.jpg',
            ],
        ];
        DB::table('categories')->insert($category);
    }
}
