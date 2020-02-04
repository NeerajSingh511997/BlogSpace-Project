<?php

namespace App\Http\Controllers;

use App\Tag;
use App\User;
use App\Post;
use App\Category;
use Session;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    
    public function index() {

        // Featured Posts
        $recent_post = Post::where('published', 1)->latest()->first();
        $second_post = Post::where('published', 1)->orderBy('created_at', 'desc')->skip(1)->take(1)->first();
        $third_post = Post::where('published', 1)->orderBy('created_at', 'desc')->skip(2)->take(1)->first();

        // first_row
        $first_row_title = Category::find(1)->name;
        // dd($first_row_title);
        $first_row_posts = Category::find(1)
                            ->posts->where('published', 1)->take(3);

        // second row
        $second_row_title = Category::find(2)->name;
        $second_row_posts = Category::find(2)
                            ->posts->where('published', 1)->take(3);

        // third row
        $third_row_title = Category::find(3)->name;
        $third_row_posts = Category::find(3)
                            ->posts->where('published', 1)->take(3);
        
        // fourth row
        $fourth_row_title = Category::find(4)->name;
        $fourth_row_posts = Category::find(4)
                            ->posts->where('published', 1)->take(3);
                            
        // fifth row
        $fifth_row_title = Category::find(5)->name;
        $fifth_row_posts = Category::find(5)
                            ->posts->where('published', 1)->take(3);


        

        //  return data to the view;
        if($recent_post && $second_post && $third_post ){

            return view('index',[
                'recent_post' => $recent_post,
                'second_post' => $second_post,
                'third_post' => $third_post,

                'first_row_title' => $first_row_title,
                'first_row_post' => $first_row_posts,

                'second_row_title' => $second_row_title,
                'second_row_post' => $second_row_posts,

                'third_row_title' => $third_row_title,
                'third_row_post' => $third_row_posts,

                'fourth_row_title' => $fourth_row_title,
                'fourth_row_post' => $fourth_row_posts,

                'fifth_row_post' => $fifth_row_posts,
                'fifth_row_title' => $fifth_row_title,
            ]); 

        }else {

            return view('index', [
                'recent_post' => 'null',
                'second_post' => 'null',
                'third_post' => 'null',

                'first_row_title' => 'null',
                'first_row_post' => 'null',

                'second_row_title' => 'null',
                'second_row_post' => 'null',

                'third_row_title' => 'null',
                'third_row_post' => 'null',

                'fourth_row_title' => 'null',
                'fourth_row_post' => 'null',
                
                'fifth_row_post' => 'null',
                'fifth_row_title' => 'null',
            ]);

        }
        
    }

    public function getPost($slug) {

        $tags = Tag::all();
        
        $post = Post::where('slug', $slug)->first();

        // dd($post->id);
        
        $prev_post_id = Post::where([
                            ['id', '<', $post->id],
                            ['published', '=', 1],
                        ])->max('id');
        
        $prev_post = Post::where('id', $prev_post_id)->get()->first();

        
        $next_post_id = Post::where([
                            ['id', '>', $post->id],
                            ['published', '=', 1],
                        ])->min('id');

        $next_post = Post::where('id', $next_post_id)->get()->first();

        // dd($next_post->toArray());

        return view('post')->with(compact('post', 'next_post', 'prev_post', 'tags'));

    }

    public function getTag($id) {

        $tags = Tag::all();

        $selectedTag = Tag::find($id);

        // dd($tag->posts);

        return view('tag')->with(compact('selectedTag', 'tags'));

    }

    public function getCategory($slug, $id) {

        $tags = Tag::all();

        $category = Category::find($id);

        // $paginate = Category::find($id)->paginate;

        return view('category')->with(compact('category', 'tags'));
    }

    public function searchQuery(){ 

        /***********************************************************
            
            Request $request object is not working fine when u 've 
            the GET request object the it contains object through 
            which handling request require more steps to accomplish.

                $query = $request->query;

        *************************************************************/
        

        $query = request('query');

        $tags = Tag::all();

        $posts = Post::where('title', 'like', '%'.$query.'%')->get();

        // dd($posts->toArray());

        return view('search')->with(compact('query', 'posts', 'tags'));

    } 

}

