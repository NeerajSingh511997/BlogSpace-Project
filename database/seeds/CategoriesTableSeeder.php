<?php

use App\Category;
use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
        	[

                'id' => 1,
        		'name' => 'Adorable Girls',
        		'category_slug' => 'adorable-girls',
        		'created_at' => '2019-05-10 16:40:10',
        	], [
                'id' => 2,
        		'name' => 'Delightful Girls',
        		'category_slug' => 'delightful-girls',
        		'created_at' => '2019-05-12 16:40:10',
        	], [
                'id' => 3,
        		'name' => 'Enchanting Girls',
        		'category_slug' => 'enchanting-girls',
        		'created_at' => '2019-07-14 16:40:10',
        	], [
                'id' => 4,
        		'name' => 'Gorgeous Girls',
        		'category_slug' => 'gorgeous-girls',
        		'created_at' => '2019-08-16 16:40:10',
        	], [
                'id' => 5,
        		'name' => 'Lovely Girls',
        		'category_slug' => 'lovely-girls',
        		'created_at' => '2019-05-18 16:40:10',
        	],
        ];

        // seeding to db;
        Category::insert($categories);
    }
}
