<?php

namespace App\Http\Controllers;

use App\Tag;
use App\Post;
use App\Category;
use Session;
use Illuminate\Http\Request;

class TagController extends Controller
{
    
    public function index()
    {   
        $tags = Tag::all();

        return view('admin.tags.index')->with('tags', $tags);
    }

    
    public function create()
    {
        return view('admin.tags.create');
    }

    public function store(Request $request)
    {
        // validate the tag;
        $this->validate($request, [
            'tag' => 'required',
        ]);

        // inserting into DB;
        $tag = new Tag();
        $tag->name = $request->tag;
        $tag->save();

        // redirecting 
        return redirect()->route('tags');

    }

   
    public function show($id)
    {
        
    }

   
    public function edit($id)
    {

        $tag = Tag::find($id);

        return view('admin.tags.edit')->with('tag', $tag);

    }

  
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'tag' => 'required',
        ]);

        $tag = Tag::find($id);
        $tag->name = $request->tag;
        $tag->save();

        return redirect()->route('tags');

    }

    public function destroy($id)
    {
        $tag = Tag::Destroy($id);

        return redirect()->route('tags');
    }
}
