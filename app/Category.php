<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

 	protected $fillable = ['name'];



	public function posts() {

		/*
			Return the relationshiop with the Post model;
		*/
		return $this->hasMany('App\Post','category_id');
	}
}
