<?php

use App\Category;
use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::truncate();
        $category = Category::create([
            'name' => 'Private',
            'description' => 'Enclosed individual space with audio/visual privacy.',
            'status'=> 1,
        ]);
        $category = Category::create([
            'name' => 'Shared',
            'description' => 'Work together and collaboratively with other people in the same office.',
            'status'=> 1,
        ]);
        $category = Category::create([
            'name' => 'Boardroom',
            'description' => 'Includes seats on all sides of the table/s. Suitable for team discussions.',
            'status'=> 1,
        ]);
    }
}
