<?php

namespace App\Http\Controllers;

use Auth;
use App\Post;
use App\Tag;
use App\Category;
use Session;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\SoftDeletes;

class PostController extends Controller
{ 

    public function index() {
        
        $posts = Post::where('published', 1)->get();

        return view('admin.posts.index')->with('posts', $posts);

    }


    public function drafts() {

       $posts = Post::where('published', 0)->get();

       return view('admin.posts.drafts')->with('posts', $posts);
    }
    

    public function create() {

        $tags = Tag::all();

        $categories = Category::all();

       // checking if there is any category or tags;
        if($categories->count() == 0 || $tags->count() == 0) {

            Session::flash('info', "You must create single category & tag before creating post.");

            return redirect()->route('home');
        }

        return view('admin.posts.create')->with(compact('categories', 'tags'));

    }   


    public function store(Request $request) {

        $post = new Post();

        // validation of creating post;
        $this->validate($request, [
            'title' => 'required|max:255',
            'content' => 'required',
            'category_id' => 'required',
            'featured' => 'required|image|mimes:jpg,jpeg,png,svg,giff|max:10000',
            'tags' => 'required',
        ]);

        // Saving rest params to post table;
        $post->title = $request->title;
        $post->content = $request->content;
        $post->category_id = $request->category_id;
        $post->slug = str_slug($request->title);
        $post->featured = 'uploads/covers/' . $featured_new_name;
        $post->user_id = Auth::id();

         // handling the featured image;
        $featured = $request->featured;
        $featured_new_name = time().'.'.$featured->getClientOriginalExtension();
        $featured->move('uploads/covers/', $featured_new_name);

        // if post is save as published or drafts;
        if($request->submit == "published_post" ) {

            $post->published = 1;

            $post->save();

            Session::flash('success', 'Your Post published successfully');

        }else {

            $post->published = 0;

            $post->save();
             
            Session::flash('info', 'Your Post saved in Draft successfully');

        }


        // Saving the Tags to Post_Tag table;
        $post->tags()->attach($request->tags);

        // redirect to post view;
        return redirect()->route('post');
    }   


    public function edit($id) {

        $tags = Tag::all();

        $categories = Category::all(); 

        $post = Post::find($id);

        return view('admin.posts.edit')->with(compact('post', 'categories', 'tags'));

    }

    public function update(Request $request, $id) {

        $post = Post::find($id);

         // validation of creating post;
        $this->validate($request, [
            'title' => 'required|max:255',
            'content' => 'required',
            'category_id' => 'required',
            'featured' => 'image|mimes:jpg,jpeg,png,svg,giff|max:10000',
            'tags' => 'required',
        ]);        


        // Saving Post to post table;
        $post->title = $request->title;
        $post->content = $request->content;
        $post->category_id = $request->category_id;
        $post->slug = str_slug($request->title);
        $post->user_id = Auth::id();


        // handling the featured image;
        if($request->has('featured')) {

            $featured = $request->featured;
            $featured_new_name = time().$featured->getClientOriginalExtension();
            $featured->move('uploads/covers', $featured_new_name);
            $post->featured = "/uploads/covers/".$featured_new_name;

        }

        if($request->submit == "published_post" ) {

            $post->published = 1;

            Session::flash('success', 'Your Post published successfully');

        }else {

            $post->published = 0;
             
            Session::flash('info', 'Your Post saved in Draft successfully');

        }

        // Saving the Tags to Post_Tag table;
        $post->tags()->attach($request->tags);

        // Saving posts;
        $post->save();

        // redirect to post view;
        return redirect()->route('post');

    }


    public function show(Request $request, $id) {

        // find the particular row;
        $post = Post::find($id);

         // validation of creating post;
        $this->validate($request, [
            'title' => 'required|max:255',
            'content' => 'required',
            'category_id' => 'required',
        ]);

        if($request->hasFile('featured')) {
            
            $featured = $request->featured;
            
            $featured_new_name = time().getClientOriginalName();
            
            $featured->move('/uploads/covers', $featured_new_name);

            $post->featured = "/uploads/covers/" . $featured_new_name;

        }

        // Saving required of the parameters to DB;

        $post->title = $request->title;

        $post->content = $request->content;

        $post->category_id = $request->category_id;

        $post->slug = str_slug($request->title);

        $post->save();

        Session::flash('success', 'Your post updated successfully.');

        return redirect()->route('post');

    }


    public function destroy($id) {

        $post = Post::find($id)->delete();

        Session::flash('success', "Your post deleted successfully");

        return redirect()->route('post');
    }


    public function recycle() {
        
        // fetching only Trashed Post;
        $posts = Post::onlyTrashed()->get();

        return view('admin.posts.recycle')->with('posts', $posts);

    }


    public function restore($id) {
        
        $post = Post::withTrashed()->where('id', $id)->first();

        if($post != null) {

            $post->restore();

            Session::flash('success', 'You post has been restored successfully');

            return redirect()->route('post.recycle');

        }else {

            Session::flash('error', "Something Unexcepted Occure while restoring");

        }

    }


    public function remove($id) {

        $post = Post::onlyTrashed()->find($id);
     
        $post->forceDelete();

        Session::flash('success', "Your post is deleted permanently");
        
        return redirect()->route('post.recycle');

    }


    public function clean() {
        
        $post = Post::onlyTrashed()->get();
        
        $post->delete();
        
        Session::flash('success', 'Successfully clean the Recycle Bin');
        
        return redirect()->route('post.recycle');

    }

}


