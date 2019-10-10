<?php

use Illuminate\Database\Seeder;

class PreferencesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Preference::create([
        	
        	'blog_name' => "BlogSpace",
        	'contact_phone' => "91 9211062142",
        	'contact_email' => "contact@BlogSpace.com",
        	'contact_address' => "Russia Peter's Burg",
            'blog_about' => "Grit is that ‘extra something' that separates the most successful people from the rest. It's the passion, perseverance, and stamina that we must channel in order to stick with our dreams until they become a reality." 
        	
        ]);
    }
}
