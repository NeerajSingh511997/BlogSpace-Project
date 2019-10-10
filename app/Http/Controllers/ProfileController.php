<?php

namespace App\Http\Controllers;

use Auth;
use Session;
use App\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index() {

        $user_id = Auth::user()->id;

        $user = User::find($user_id);

        // dd($user->profile->avatar);

        if($user == null) {
            dd("No Profile Found!");
            Session::flash('info', "Profile Not Found !");
            return redirect()->back();
        }

    	return view('admin.profiles.index')->with('user', $user);

    }

    public function create() {

    	return view('admin.profiles.create');

    }

    public function store(Request $request) {

    	dd($request->all());

    }

    public function edit() {

    	return view('admin.profiles.edit');

    }

    public function update(Request $request) {

        $user = Auth::user();

        // dd($request->all());
        
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'password' => 'sometimes',
            'password_check' => 'sometimes|same:password',
            'avatar' => 'sometimes|required',
            'cover' => 'sometimes|required',
            'about' => 'sometimes|required',
            'facebook' => 'sometimes|required|url',
            'twitter' => 'sometimes|required|url',
            'youtube' => 'sometimes|required|url',
            'instagram' => 'sometimes|required|url',
        ]);


        // dd($user->name);
        

        // saving the rest data to the user table;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->profile->about = $request->about;

        // checking for the password
        if($request->has('password')) {
            $user->password = bcrypt($request->password);
        }
        $user->save();

        // saving the rest data to the profile table;
        if($request->has('facebook')||$request->has('instagram')||$request->has('youtube')||$request->has('twitter')) {
            
            $user->profile->facebook = $request->facebook;
            $user->profile->youtube = $request->youtube;
            $user->profile->twitter = $request->twitter;
            $user->profile->instagram = $request->instagram;
        
        }

        // checking for cover image
        if($request->hasFile('cover')) {

            // saving data to the profile table;
            $cover = $request->cover;
            $cover_new_name = time().'.'.$cover->getClientOriginalExtension();
            $cover->move('uploads/profile-cover/', $cover_new_name);
            $user->profile->cover = 'uploads/profile-cover/' . $cover_new_name;
            $user->profile->save();   

        }else {

            // checking if there is any file or not;
            if ($user->profile->avatar == null) {


            }
        }

        // checking for avatar image
        if($request->hasFile('avatar')) {

            // saving data to the profile table;
            $avatar = $request->avatar;
            $avatar_new_name = time().'.'.$avatar->getClientOriginalExtension();
            $user->profile->avatar = 'uploads/profile-avatar/' . $avatar_new_name;
            $user->profile->save();
            $avatar->move('uploads/profile-avatar/', $avatar_new_name);
            

        }

        
        $user->profile->save();

        Session::flash('success', $request->name . " updated successfully.");

        return redirect()->route('profile');

    }

}

