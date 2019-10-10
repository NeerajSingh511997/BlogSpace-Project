<?php

namespace App\Http\Controllers;

use App\User;
use App\Profile;
use Session;
use Illuminate\Http\Request;

class UserController extends Controller
{
	

	public function __construct() {

		$this->middleware('admin');
	}


    public function index() {

        $users = User::all();

        return view('admin.users.index')->with('users', $users);

    }


	public function create() {

		return view('admin.users.create');

	}


	public function store(Request $request) {

		$user = new User();

        $profile = new Profile();

		$this->validate($request, [
			'name' => 'required',
			'email' => 'required|email',
			'password' => 'required|min:3',
			'password_check' => 'required|same:password',
			'account_type' => 'required|boolean',
		]);
           

		// creating user;
		$user->name = $request->name;
		$user->email = $request->email;
		$user->password = bcrypt($request->password);
		$user->admin = $request->account_type;
        $user->save();

    
        if($user) {

            // creating profile;
            $profile->user_id = $user->id;
            $profile->avatar = "blog/avatar/avatar.png";
            $profile->cover = "blog/cover/cover.jpg";
            $profile->about = "Please Tell us about yourself";
            $profile->save();    

        }else {

            Session::flash('error', 'Something unexpected occured !');
            return redirect()->route('users');

        }

		Session::flash('success', "Account has been created for " .$request->name);

		return redirect()->back();

	}

    public function edit($id) {

        $user = User::where('id', $id)->get()->first();

        // dd($user->toArray());

        return view('admin.users.edit')->with('user', $user);

    }


    public function update(Request $request, $id) {

        $user = User::find($id);

        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'password' => 'sometimes',
            'password_check' => 'sometimes|same:password',
            'about' => 'sometimes|required',
            'avatar' => 'sometimes|image',
            'cover' => 'sometimes|image',
            'facebook' => 'sometimes|required|url',
            'twitter' => 'sometimes|required|url',
            'youtube' => 'sometimes|required|url',
            'instagram' => 'sometimes|required|url',
        ]);


        // dd($request->password);
        

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
        if($request->has('facebook')||
            $request->has('instagram')||
            $request->has('youtube')||
            $request->has('twitter')) {

            $user->profile->facebook = $request->facebook;
            $user->profile->youtube = $request->youtube;
            $user->profile->twitter = $request->twitter;
            $user->profile->instagram = $request->instagram;    

        }else { 

            $user->profile->facebook = "null";
            $user->profile->youtube = "null";
            $user->profile->twitter = "null";
            $user->profile->instagram = "null";
            

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
            if (!$user->profile->cover) {

                $user->profile->cover = 'blog/cover/cover.jpg';

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
            

        }else {

            if (!$user->profile->avatar) {

                $user->profile->avatar = "blog/avatar/avatar.png";

            }   

        }

        
        $user->profile->save();

        Session::flash('success', $request->name . " updated successfully.");

        return redirect()->route('users');

    }

	public function delete($id) {

		$user = User::find($id);

        if($user) {

            $user->profile->delete();
            $user->delete();
            Session::flash('success', 'User and its Profile deleted successfully');
            return redirect()->route('users');

        }else {

            Session::flash('error', 'Something unexpected happened');
            return redirect()->route('users');
        }


        Session::flash('success', 'User Account deleted successfully');

		return redirect()->back();
	}

	public function create_admin($id) {

		$user = User::find($id);

		$user->admin = 1;

		$user->save();

		Session::flash('success', 'Permission added successfully');

		return redirect()->back();

	}

	public function remove_admin($id) {

		$user = User::find($id);

		$user->admin = 0;

		$user->save();

		Session::flash('success', 'Permission remove successfully');

		return redirect()->back();

	}


}

