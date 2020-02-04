<?php

namespace App\Http\Controllers;

use Session;
use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
   

    public function index() {   

        $categories = Category::all();

        return view("admin.categories.index")->with('categories', $categories);
    }

    
    public function create() {

        return view('admin.categories.create');
    }

    
    public function store(Request $request) {

        $category = new Category();

        $this->validate($request, [
            'category_name' => 'required',
        ], [
            'category_name.required' => "Category field can not be blank.",
        ]);

        // saving category;
        $category->name = $request->category_name;
        $category->category_slug = str_slug($request->category_name);
        $category->save();

        Session::flash('success', "Category ". $request->category_name . " updates successfully");
        return redirect()->route('category');
    }

  
    public function edit($id) {

        $category = Category::find($id);

        return view('admin.categories.edit')->with('category', $category);
    }

   
    public function update(Request $request, $id) {

        $category = Category::find($id);

        $this->validate($request, [
            'category_name' => 'required',
        ], [
            'category_name.required' => "Category field can not be blank.",
        ]);

        // saving category;
        $category->name = $request->category_name;
        $category->category_slug = str_slug($request->category_name);
        $category->save();

        Session::flash('success', "Category ". $request->category_name . " updates successfully");

        return redirect()->route('category');
    }

    
    public function destroy($id) {

        $category = new Category();

        if ($category != null) {

            $category->find($id)->delete();

            Session::flash('success', 'Category deleted successfully');

            return redirect()->route('category');

        }else {

            dd('Category object is null');
            
        }
    }
}
