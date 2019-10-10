<?php

use App\User;
use App\Profile;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        // creating users;
        $users = [
            [
                'name' => 'Junior',
                'admin' => 1,
                'email' => 'junior@blog.com',
                'password' => bcrypt('admin'),
                'created_at' => '2019-06-01 16:39:40',
            ], [
                'name' => 'Jihyo',
                'admin' => 1,
                'email' => 'jihyo@blog.com',
                'password' => bcrypt('jihyo'),
                'created_at' => '2019-06-05 16:39:40',
            ], [
                'name' => 'Devil',
                'admin' => 1,
                'email' => 'devil@blog.com',
                'password' => bcrypt('devil'),
                'created_at' => '2019-06-10 16:39:40',
            ], [
                'name' => 'Anna',
                'admin' => 0,
                'email' => 'anna@blog.com',
                'password' => bcrypt('anna'),
                'created_at' => '2019-06-10 16:39:40',
            ],[
                'name' => 'Bot',
                'admin' => 1,
                'email' => 'bot@blog.com',
                'password' => bcrypt('bot'),
                'created_at' => '2019-06-10 16:39:40',
            ],

        ];

        // creating profiles;
        $profiles = [
            [
                'user_id' => 1,
                'avatar' => 'blog/avatar/junior.jpg',
                'cover' => 'blog/cover/junior.jpg',
                'facebook' => 'http://facebook.com/junior',
                'instagram' => 'http://instagram.com/junior',
                'youtube' => 'http://youtube.com/junior',
                'twitter' => 'http://twitter.com/junior',
                'about' => "Today is the first of August. It is hot, steamy and wet. It is raining. I am tempted to write a poem. But I remember what it said on one rejection slip. After a heavy rainfall, poems titled 'Rain' pour in from across the nation.",
            ], [

                'user_id' => 2,
                'avatar' => 'blog/avatar/jihyo.jpg',
                'cover' => 'blog/cover/jihyo.jpg',
                'facebook' => 'http://facebook.com/jihyo',
                'instagram' => 'http://instagram.com/jihyo',
                'youtube' => 'http://youtube.com/jihyo',
                'twitter' => 'http://twitter.com/jihyo',
                'about' => "You are not here merely to make a living. You are here in order to enable the world to live more amply, with greater vision, with a finer spirit of hope and achievement. You are here to enrich the world, and you impoverish yourself if you forget the errand.",                
            ], [
                'user_id' => 3,
                'avatar' => 'blog/avatar/deathnote.png',
                'cover' => 'blog/cover/devil-cover.jpg',
                'facebook' => 'http://facebook.com/devil',
                'instagram' => 'http://instagram.com/devil',
                'youtube' => 'http://youtube.com/devil',
                'twitter' => 'http://twitter.com/devil',
                'about' => "Love is like a friendship caught on fire. In the beginning a flame, very pretty, often hot and fierce, but still only light and flickering. As love grows older, our hearts mature and our love becomes as coals, deep-burning and unquenchable.",
            ], [
                'user_id' => 4,
                'avatar' => 'blog/avatar/avatar.png',
                'cover' => 'blog/cover/cover.jpg',
                'facebook' => 'http://facebook.com/anna',
                'instagram' => 'http://instagram.com/anna',
                'youtube' => 'http://youtube.com/anna',
                'twitter' => 'http://twitter.com/anna',
                'about' => "Be patient with yourself. Self-growth is tender; it's holy ground. There's no greater investment.",
            ], [
                'user_id' => 5,
                'avatar' => 'blog/avatar/avatar.png',
                'cover' => 'blog/cover/cover.jpg',
                'facebook' => 'http://facebook.com/Bot',
                'instagram' => 'http://instagram.com/Bot',
                'youtube' => 'http://youtube.com/Bot',
                'twitter' => 'http://twitter.com/Bot',
                'about' => "Pretend that every single person you meet has a sign around his or her neck that says, 'Make me feel important.' Not only will you succeed in sales, you will succeed in life.",
            ]

        ];

        // seeding to users;
    	User::insert($users);

        // seeding to profiles;
        Profile::insert($profiles);
    }
}
