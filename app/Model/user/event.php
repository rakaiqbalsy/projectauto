<?php

namespace App\Model\user;

use Illuminate\Database\Eloquent\Model;

class event extends Model
{
 	 public function getRouteKeyName() {
    	return 'slug';
    }
}
