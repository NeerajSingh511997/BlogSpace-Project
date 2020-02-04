<?php

use App\Post;
use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {	
    	// title of posts;
     	$title = array();
     	$title[0] = "She is a cute girls, but i don't know her name.";
     	$title[1] = "If you want to me at some point then the door of hell is for you too.";
     	$title[2] = "Why we humans are inbuild we the feature of RUNAWAY from failure.";
     	$title[3] = "Be Humble, Be Hungry & always be the hardes worker in the room.";
     	$title[4] = "The true sign of intelligence is not knowledge but imagination.";
     	$title[5] = "Be very careful of people whose words don't match with their actions";
     	$title[6] = "If Someone tells you, You Can't. It means they are showing their limits.";
     	$title[7] = "FORGET the MISTAKES, REMEMBER the LESSON";
     	$title[8] = "SILENCE is the best reply to a fool";
     	$title[9] = "Move in SILENCE, only speak when its CHECKMATE.";
     	$title[10] = "You will never make it if you care about every fucking bitch.";
     	$title[11] = "Life is too short to wine for everything";
     	$title[12] = "Heaven is here when you find yourself in her warm arm.";
     	$title[13] = "Life changes when you give yourself for her to be with her.";
     	$title[14] = "I feel alive when she hold my hand for the very first time.";
		$title[15] = "Get back every time after you fall hard.";
     	$title[16] = "Life is easy but do you have patience untill everything clears";
     	$title[17] = "Just be worthy with the time, you have in your life";
     	$title[18] = "Don't whine for the one you lost just make sure to hit next.";
     	$title[19] = "Don't run away from your fucking fear of loosing !";
     	$title[20] = "Your time is limited, so don't waste it living someone else's life.";
     	$title[21] = "Hire character. Train skill";
     	$title[22] = "Everyone lives by selling something.";
     	$title[23] = "If you cannot do great things, do small things in a great way.";
     	$title[24] = "Without a customer, you don't have a business -- all you have is a hobby.";
     	$title[25] = "Beware of monotony; it's the mother of all the deadly sins.";
     

     	$posts = [
     		[
     			'title' => $title[0],
     			'slug' => str_slug($title[0]),
     			'published' => 1,
     			'user_id' => 1,
     			'category_id' => 1,
     			'created_at' => '2019-07-02 16:40:10',
     			'featured' => '/uploads/covers/1567789033.jpg',
     			'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Diam sit amet nisl suscipit adipiscing bibendum est. Mi ipsum faucibus vitae aliquet nec ullamcorper. Sed turpis tincidunt id aliquet risus feugiat in. Volutpat est velit egestas dui id ornare arcu odio. Malesuada fames ac turpis egestas. Id neque aliquam vestibulum morbi blandit cursus. Tincidunt id aliquet risus feugiat. Feugiat sed lectus vestibulum mattis ullamcorper velit sed. Id velit ut tortor pretium viverra suspendisse. Non blandit massa enim nec dui nunc mattis enim ut.',

     		], [
     			'title' => $title[1],
     			'slug' => str_slug($title[1]),
     			'published' => 1,
     			'user_id' => 2,
     			'category_id' => 2,
     			'created_at' => '2019-07-03 16:40:10',
     			'featured' => '/uploads/covers/1567789073.jpg',
     			'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Diam sit amet nisl suscipit adipiscing bibendum est. Mi ipsum faucibus vitae aliquet nec ullamcorper. Sed turpis tincidunt id aliquet risus feugiat in. Volutpat est velit egestas dui id ornare arcu odio. Malesuada fames ac turpis egestas. Id neque aliquam vestibulum morbi blandit cursus. Tincidunt id aliquet risus feugiat. Feugiat sed lectus vestibulum mattis ullamcorper velit sed. Id velit ut tortor pretium viverra suspendisse. Non blandit massa enim nec dui nunc mattis enim ut.',

     		], [
     			'title' => $title[2],
     			'slug' => str_slug($title[2]),
     			'published' => 1,
     			'user_id' => 3,
     			'category_id' => 3,
     			'created_at' => '2019-07-04 16:40:10',
     			'featured' => '/uploads/covers/1567789126.jpg',
     			'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Diam sit amet nisl suscipit adipiscing bibendum est. Mi ipsum faucibus vitae aliquet nec ullamcorper. Sed turpis tincidunt id aliquet risus feugiat in. Volutpat est velit egestas dui id ornare arcu odio. Malesuada fames ac turpis egestas. Id neque aliquam vestibulum morbi blandit cursus. Tincidunt id aliquet risus feugiat. Feugiat sed lectus vestibulum mattis ullamcorper velit sed. Id velit ut tortor pretium viverra suspendisse. Non blandit massa enim nec dui nunc mattis enim ut.',

     		], [
     			'title' => $title[3],
     			'slug' => str_slug($title[3]),
     			'published' => 1,
     			'user_id' => 4,
     			'category_id' => 4,
     			'created_at' => '2019-07-04 16:40:10',
     			'featured' => '/uploads/covers/1567789199.jpg',
     			'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Diam sit amet nisl suscipit adipiscing bibendum est. Mi ipsum faucibus vitae aliquet nec ullamcorper. Sed turpis tincidunt id aliquet risus feugiat in. Volutpat est velit egestas dui id ornare arcu odio. Malesuada fames ac turpis egestas. Id neque aliquam vestibulum morbi blandit cursus. Tincidunt id aliquet risus feugiat. Feugiat sed lectus vestibulum mattis ullamcorper velit sed. Id velit ut tortor pretium viverra suspendisse. Non blandit massa enim nec dui nunc mattis enim ut.',

     		], [
     			'title' => $title[5],
     			'slug' => str_slug($title[5]),
     			'published' => 1,
     			'user_id' => 5,
     			'category_id' => 5,
     			'created_at' => '2019-07-05 16:40:10',
     			'featured' => '/uploads/covers/1567789279.jpg',
     			'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Diam sit amet nisl suscipit adipiscing bibendum est. Mi ipsum faucibus vitae aliquet nec ullamcorper. Sed turpis tincidunt id aliquet risus feugiat in. Volutpat est velit egestas dui id ornare arcu odio. Malesuada fames ac turpis egestas. Id neque aliquam vestibulum morbi blandit cursus. Tincidunt id aliquet risus feugiat. Feugiat sed lectus vestibulum mattis ullamcorper velit sed. Id velit ut tortor pretium viverra suspendisse. Non blandit massa enim nec dui nunc mattis enim ut.',

     		], [
     			'title' => $title[6],
     			'slug' => str_slug($title[6]),
     			'published' => 1,
     			'user_id' => 1,
     			'category_id' => 1,
     			'created_at' => '2019-07-06 16:40:10',
     			'featured' => '/uploads/covers/1567789392.jpg',
     			'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Diam sit amet nisl suscipit adipiscing bibendum est. Mi ipsum faucibus vitae aliquet nec ullamcorper. Sed turpis tincidunt id aliquet risus feugiat in. Volutpat est velit egestas dui id ornare arcu odio. Malesuada fames ac turpis egestas. Id neque aliquam vestibulum morbi blandit cursus. Tincidunt id aliquet risus feugiat. Feugiat sed lectus vestibulum mattis ullamcorper velit sed. Id velit ut tortor pretium viverra suspendisse. Non blandit massa enim nec dui nunc mattis enim ut.',

     		], [
     			'title' => $title[7],
     			'slug' => str_slug($title[7]),
     			'published' => 1,
     			'user_id' => 2,
     			'category_id' => 2,
     			'created_at' => '2019-07-08 16:40:10',
     			'featured' => '/uploads/covers/1567789437.jpg',
     			'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Diam sit amet nisl suscipit adipiscing bibendum est. Mi ipsum faucibus vitae aliquet nec ullamcorper. Sed turpis tincidunt id aliquet risus feugiat in. Volutpat est velit egestas dui id ornare arcu odio. Malesuada fames ac turpis egestas. Id neque aliquam vestibulum morbi blandit cursus. Tincidunt id aliquet risus feugiat. Feugiat sed lectus vestibulum mattis ullamcorper velit sed. Id velit ut tortor pretium viverra suspendisse. Non blandit massa enim nec dui nunc mattis enim ut.',

     		], [
     			'title' => $title[8],
     			'slug' => str_slug($title[8]),
     			'published' => 1,
     			'user_id' => 3,
     			'category_id' => 3,
     			'created_at' => '2019-07-09 16:40:10',
     			'featured' => '/uploads/covers/1567789543.jpg',
     			'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Diam sit amet nisl suscipit adipiscing bibendum est. Mi ipsum faucibus vitae aliquet nec ullamcorper. Sed turpis tincidunt id aliquet risus feugiat in. Volutpat est velit egestas dui id ornare arcu odio. Malesuada fames ac turpis egestas. Id neque aliquam vestibulum morbi blandit cursus. Tincidunt id aliquet risus feugiat. Feugiat sed lectus vestibulum mattis ullamcorper velit sed. Id velit ut tortor pretium viverra suspendisse. Non blandit massa enim nec dui nunc mattis enim ut.',

     		], [
     			'title' => $title[9],
     			'slug' => str_slug($title[9]),
     			'published' => 1,
     			'user_id' => 4,
     			'category_id' => 4,
     			'created_at' => '2019-07-10 16:40:10',
     			'featured' => '/uploads/covers/1567789681.jpg',
     			'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Diam sit amet nisl suscipit adipiscing bibendum est. Mi ipsum faucibus vitae aliquet nec ullamcorper. Sed turpis tincidunt id aliquet risus feugiat in. Volutpat est velit egestas dui id ornare arcu odio. Malesuada fames ac turpis egestas. Id neque aliquam vestibulum morbi blandit cursus. Tincidunt id aliquet risus feugiat. Feugiat sed lectus vestibulum mattis ullamcorper velit sed. Id velit ut tortor pretium viverra suspendisse. Non blandit massa enim nec dui nunc mattis enim ut.',

     		], [
     			'title' => $title[10],
     			'slug' => str_slug($title[10]),
     			'published' => 1,
     			'user_id' => 5,
     			'category_id' => 5,
     			'created_at' => '2019-07-11 16:40:10',
     			'featured' => '/uploads/covers/1567789743.jpg',
     			'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Diam sit amet nisl suscipit adipiscing bibendum est. Mi ipsum faucibus vitae aliquet nec ullamcorper. Sed turpis tincidunt id aliquet risus feugiat in. Volutpat est velit egestas dui id ornare arcu odio. Malesuada fames ac turpis egestas. Id neque aliquam vestibulum morbi blandit cursus. Tincidunt id aliquet risus feugiat. Feugiat sed lectus vestibulum mattis ullamcorper velit sed. Id velit ut tortor pretium viverra suspendisse. Non blandit massa enim nec dui nunc mattis enim ut.',

     		], [
     			'title' => $title[11],
     			'slug' => str_slug($title[11]),
     			'published' => 1,
     			'user_id' => 1,
     			'category_id' => 1,
     			'created_at' => '2019-07-12 16:40:10',
     			'featured' => '/uploads/covers/1567789949.jpg',
     			'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Diam sit amet nisl suscipit adipiscing bibendum est. Mi ipsum faucibus vitae aliquet nec ullamcorper. Sed turpis tincidunt id aliquet risus feugiat in. Volutpat est velit egestas dui id ornare arcu odio. Malesuada fames ac turpis egestas. Id neque aliquam vestibulum morbi blandit cursus. Tincidunt id aliquet risus feugiat. Feugiat sed lectus vestibulum mattis ullamcorper velit sed. Id velit ut tortor pretium viverra suspendisse. Non blandit massa enim nec dui nunc mattis enim ut.',

     		], [
     			'title' => $title[12],
     			'slug' => str_slug($title[12]),
     			'published' => 1,
     			'user_id' => 2,
     			'category_id' => 2,
     			'created_at' => '2019-07-12 16:40:10',
     			'featured' => 'uploads/covers/1567789854.jpg',
     			'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Diam sit amet nisl suscipit adipiscing bibendum est. Mi ipsum faucibus vitae aliquet nec ullamcorper. Sed turpis tincidunt id aliquet risus feugiat in. Volutpat est velit egestas dui id ornare arcu odio. Malesuada fames ac turpis egestas. Id neque aliquam vestibulum morbi blandit cursus. Tincidunt id aliquet risus feugiat. Feugiat sed lectus vestibulum mattis ullamcorper velit sed. Id velit ut tortor pretium viverra suspendisse. Non blandit massa enim nec dui nunc mattis enim ut.',

     		], [
     			'title' => $title[13],
     			'slug' => str_slug($title[13]),
     			'published' => 1,
     			'user_id' => 3,
     			'category_id' => 3,
     			'created_at' => '2019-07-14 16:40:10',
     			'featured' => 'uploads/covers/1567790143.jpg',
     			'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Diam sit amet nisl suscipit adipiscing bibendum est. Mi ipsum faucibus vitae aliquet nec ullamcorper. Sed turpis tincidunt id aliquet risus feugiat in. Volutpat est velit egestas dui id ornare arcu odio. Malesuada fames ac turpis egestas. Id neque aliquam vestibulum morbi blandit cursus. Tincidunt id aliquet risus feugiat. Feugiat sed lectus vestibulum mattis ullamcorper velit sed. Id velit ut tortor pretium viverra suspendisse. Non blandit massa enim nec dui nunc mattis enim ut.',

     		], [
     			'title' => $title[14],
     			'slug' => str_slug($title[14]),
     			'published' => 1,
     			'user_id' => 4,
     			'category_id' => 4,
     			'created_at' => '2019-07-15 16:40:10',
     			'featured' => 'uploads/covers/1567790347.jpg',
     			'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Diam sit amet nisl suscipit adipiscing bibendum est. Mi ipsum faucibus vitae aliquet nec ullamcorper. Sed turpis tincidunt id aliquet risus feugiat in. Volutpat est velit egestas dui id ornare arcu odio. Malesuada fames ac turpis egestas. Id neque aliquam vestibulum morbi blandit cursus. Tincidunt id aliquet risus feugiat. Feugiat sed lectus vestibulum mattis ullamcorper velit sed. Id velit ut tortor pretium viverra suspendisse. Non blandit massa enim nec dui nunc mattis enim ut.',

     		], [
     			'title' => $title[15],
     			'slug' => str_slug($title[15]),
     			'published' => 1,
     			'user_id' => 5,
     			'category_id' => 5,
     			'created_at' => '2019-07-16 16:40:10',
     			'featured' => 'uploads/covers/1567790421.jpg',
     			'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Diam sit amet nisl suscipit adipiscing bibendum est. Mi ipsum faucibus vitae aliquet nec ullamcorper. Sed turpis tincidunt id aliquet risus feugiat in. Volutpat est velit egestas dui id ornare arcu odio. Malesuada fames ac turpis egestas. Id neque aliquam vestibulum morbi blandit cursus. Tincidunt id aliquet risus feugiat. Feugiat sed lectus vestibulum mattis ullamcorper velit sed. Id velit ut tortor pretium viverra suspendisse. Non blandit massa enim nec dui nunc mattis enim ut.',

     		], [
                    'title' => $title[16],
                    'slug' => str_slug($title[16]),
                    'published' => 0,
                    'user_id' => 5,
                    'category_id' => 5,
                    'created_at' => '2019-07-16 16:40:10',
                    'featured' => 'uploads/covers/1567885263.jpg',
                    'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Diam sit amet nisl suscipit adipiscing bibendum est. Mi ipsum faucibus vitae aliquet nec ullamcorper. Sed turpis tincidunt id aliquet risus feugiat in. Volutpat est velit egestas dui id ornare arcu odio. Malesuada fames ac turpis egestas. Id neque aliquam vestibulum morbi blandit cursus. Tincidunt id aliquet risus feugiat. Feugiat sed lectus vestibulum mattis ullamcorper velit sed. Id velit ut tortor pretium viverra suspendisse. Non blandit massa enim nec dui nunc mattis enim ut.',

               ], [
                    'title' => $title[17],
                    'slug' => str_slug($title[17]),
                    'published' => 0,
                    'user_id' => 5,
                    'category_id' => 5,
                    'created_at' => '2019-07-16 16:40:10',
                    'featured' => 'uploads/covers/1567885264.jpg',
                    'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Diam sit amet nisl suscipit adipiscing bibendum est. Mi ipsum faucibus vitae aliquet nec ullamcorper. Sed turpis tincidunt id aliquet risus feugiat in. Volutpat est velit egestas dui id ornare arcu odio. Malesuada fames ac turpis egestas. Id neque aliquam vestibulum morbi blandit cursus. Tincidunt id aliquet risus feugiat. Feugiat sed lectus vestibulum mattis ullamcorper velit sed. Id velit ut tortor pretium viverra suspendisse. Non blandit massa enim nec dui nunc mattis enim ut.',

               ],

     	];


     	// seeding posts to db;
     	Post::insert($posts);
    }
}
