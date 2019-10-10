<?php

namespace App\Http\Controllers;

use App\Tag;
use App\Post;
use App\User;
use App\Category;
use Session;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct() {

        $this->middleware('auth');
    }


    public function index() {

        $tags = Tag::all();

        $categories = Category::take(4)->get();

        $posts = Post::latest()->take(3)->get();

        $draftPosts = Post::where('published', 0)->orderBy('created_at', 'desc')->take(2)->get();

        $trashedPosts = Post::onlyTrashed()->get();

        // dd($trashedPosts);

        $postCount = Post::where('published', 1)->count();

        $draftCount = Post::where('published', 0)->count();

        $userCount = User::count();

        $trashCount = Post::onlyTrashed()->count();        

        return view('admin.dashboard', [

            'tags' => $tags,
            'posts' => $posts,
            'categories' => $categories,

            'draftPosts'  => $draftPosts,
            'trashedPosts' => $trashedPosts,

            'postCount' => $postCount,
            'draftCount' => $draftCount,
            'userCount' => $userCount,
            'trashCount' => $trashCount,

        ]);
    }
}
