<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Preference extends Model
{
	
	protected $fillable = [ 'blog_name', 
							'contact_number', 
							'contact_email', 
							'contact_address'
						];

}
