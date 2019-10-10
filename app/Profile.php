<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{	

	protected $fillable = [ 'name', 'email', 'password', 'about', 'avatar', 'cover', 'facebook', 'twitter', 'youtube', 'instagram'];

    public function user() {

    	return $this->hasOne('App\User');
    	
    }
}
