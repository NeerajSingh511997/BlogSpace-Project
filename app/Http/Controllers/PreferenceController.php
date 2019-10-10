<?php

namespace App\Http\Controllers;

use App\Preference;
use Session;
use Illuminate\Http\Request;

class PreferenceController extends Controller
{



	public function index() {

		$preference = Preference::latest()->first();

		return view('admin.preferences.index')->with('preference', $preference);
		
	}


    public function edit() {

    	$preference = Preference::latest()->first();

    	return view('admin.preferences.edit')->with('preference', $preference);

    }


    public function update(Request $request) {

    	$preference = new Preference();

    	$this->validate($request, [
    		'blog_name' => 'required',
    		'contact_phone' => 'required',
    		'contact_email' => 'required|email',
    		'contact_address' => 'required',
            'blog_about' => 'required'
    	]);

    	$preference->blog_name = $request->blog_name;
        $preference->blog_about = $request->blog_about;
    	$preference->contact_phone = $request->contact_phone;
    	$preference->contact_email = $request->contact_email;
    	$preference->contact_address = $request->contact_address;
    	$preference->save();

    	Session::flash('success', 'Blog Preferences saved successfully');

    	return redirect()->back();

    }
}
