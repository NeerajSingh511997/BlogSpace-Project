<?php

use App\Post;
use Illuminate\Database\Seeder;

class PostTagTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $post_tag = [
        	[	
        		'id' => 1,
        		'post_id' => 1,
        		'tag_id' => 1,
        		'created_at' => '2019-07-10 16:40:10',
        	], [
        		'id' => 2,
        		'post_id' => 1,
        		'tag_id' => 2,
        		'created_at' => '2019-07-10 16:40:10',
        	], [
        		'id' => 3,
        		'post_id' => 2,
        		'tag_id' => 2,
        		'created_at' => '2019-07-10 16:40:10',
        	], [
        		'id' => 4,
        		'post_id' => 2,
        		'tag_id' => 3,
        		'created_at' => '2019-07-10 16:40:10',
        	], [
        		'id' => 5,
        		'post_id' => 3,
        		'tag_id' => 3,
        		'created_at' => '2019-07-10 16:40:10',
        	], [
        		'id' => 6,
        		'post_id' => 3,
        		'tag_id' => 4,
        		'created_at' => '2019-07-10 16:40:10',
        	], [
        		'id' => 7,
        		'post_id' => 4,
        		'tag_id' => 4,
        		'created_at' => '2019-07-10 16:40:10',
        	], [
        		'id' => 8,
        		'post_id' => 4,
        		'tag_id' => 5,
        		'created_at' => '2019-07-10 16:40:10',
        	], [
        		'id' => 9,
        		'post_id' => 6,
        		'tag_id' => 8,
        		'created_at' => '2019-07-10 16:40:10',
        	], [
        		'id' => 10,
        		'post_id' => 5,
        		'tag_id' => 7,
        		'created_at' => '2019-07-10 16:40:10',
        	], [
        		'id' => 11,
        		'post_id' => 5,
        		'tag_id' => 5,
        		'created_at' => '2019-07-10 16:40:10',
        	], [
        		'id' => 12,
        		'post_id' => 6,
        		'tag_id' => 6,
        		'created_at' => '2019-07-10 16:40:10',
        	], [
        		'id' => 13,
        		'post_id' => 6,
        		'tag_id' => 7,
        		'created_at' => '2019-07-10 16:40:10',
        	], [
        		'id' => 14,
        		'post_id' => 8,
        		'tag_id' => 8,
        		'created_at' => '2019-07-10 16:40:10',
        	], [
        		'id' => 15,
        		'post_id' => 8,
        		'tag_id' => 1,
        		'created_at' => '2019-07-10 16:40:10',
        	], [
        		'id' => 16,
        		'post_id' => 9,
        		'tag_id' => 1,
        		'created_at' => '2019-07-10 16:40:10',
        	], [
        		'id' => 17,
        		'post_id' => 9,
        		'tag_id' => 4,
        		'created_at' => '2019-07-10 16:40:10',
        	], [
        		'id' => 18,
        		'post_id' => 9,
        		'tag_id' => 6,
        		'created_at' => '2019-07-10 16:40:10',
        	], [
        		'id' => 19,
        		'post_id' => 10,
        		'tag_id' => 4,
        		'created_at' => '2019-07-10 16:40:10',
        	], [
        		'id' => 20,
        		'post_id' => 11,
        		'tag_id' => 7,
        		'created_at' => '2019-07-10 16:40:10',
        	], [
        		'id' => 21,
        		'post_id' => 12,
        		'tag_id' => 4,
        		'created_at' => '2019-07-10 16:40:10',
        	], [
        		'id' => 22,
        		'post_id' => 13,
        		'tag_id' => 5,
        		'created_at' => '2019-07-10 16:40:10',
        	], [
        		'id' => 23,
        		'post_id' => 14,
        		'tag_id' => 7,
        		'created_at' => '2019-07-10 16:40:10',
        	], [
        		'id' => 24,
        		'post_id' => 15,
        		'tag_id' => 8,
        		'created_at' => '2019-07-10 16:40:10',
        	], [
        		'id' => 25,
        		'post_id' => 15,
        		'tag_id' => 1,
        		'created_at' => '2019-07-10 16:40:10',
        	], 

        ];
	

		// seeding to db:
		$post = new Post();
		$post->tags()->sync($post_tag);
		// $post->tags()->attach($post_tag);

    }
}
