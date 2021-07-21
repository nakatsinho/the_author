<?php

use Author\Models\Category;
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
        Category::insert([
            'id' => '1',
            'name' => 'Programming',
        ]);
        Category::insert([
            'id' => '2',
            'name' => 'Romance',
        ]);
        Category::insert([
            'id' => '3',
            'name' => 'Literary Fiction',
        ]);
        Category::insert([
            'id' => '4',
            'name' => 'Horror',
        ]);
        Category::insert([
            'id' => '5',
            'name' => 'Historical Fiction',
        ]);
        Category::insert([
            'id' => '6',
            'name' => 'Fantasy',
        ]);
        Category::insert([
            'id' => '7',
            'name' => 'Detective and Mystery',
        ]);
        Category::insert([
            'id' => '8',
            'name' => 'Comic Book or Graphic Novel',
        ]);
        Category::insert([
            'id' => '9',
            'name' => 'Classics',
        ]);
        Category::insert([
            'id' => '10',
            'name' => 'Action and Adventure',
        ]);
    }
}
