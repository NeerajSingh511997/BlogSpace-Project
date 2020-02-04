<?php

use App\Tag;
use Illuminate\Database\Seeder;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tags = [
        	[
        		'name' => 'Babester',
                'slug' => 'babester',
        		'created_at' => '2019-10-05 05:40:20',
        	],  [
        		'name' => 'Bewitcher',
                'slug' => 'bewitcher',
        		'created_at' => '2019-10-07 05:40:20',
        	],  [
        		'name' => 'Chicks',
                'slug' => 'chicks',
        		'created_at' => '2019-10-08 05:40:20',
        	],  [
        		'name' => 'Exotics',
                'slug' => 'exotics',
        		'created_at' => '2019-10-12 05:40:20',
        	],  [
        		'name' => 'Killer',
                'slug' => 'killer',
        		'created_at' => '2019-10-13 05:40:20',
        	],  [
        		'name' => 'Seductive',
                'slug' => 'seductive',
        		'created_at' => '2019-10-14 05:40:20',
        	],  [
        		'name' => 'Tantalizers',
                'slug' => 'tantalizers',
        		'created_at' => '2019-10-15 05:40:20',
        	],  [
        		'name' => 'Tempting',
                'slug' => 'tempting',
        		'created_at' => '2019-10-16 05:40:20',
        	], 
        ];

        // seeding to db;
        Tag::insert($tags);
    }
}
