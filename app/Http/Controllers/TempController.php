<?php

namespace App\Http\Controllers;

use App\Tag;
use App\Post;
use App\Category;
use Illuminate\Http\Request;

class TempController extends Controller
{
   
    public function index() {

        return view('auth.temp');

    }
}
