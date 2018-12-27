<?php

namespace App\Model\user;

use Illuminate\Database\Eloquent\Model;

class catalog extends Model
{
    //
     public function getRouteKeyName() {
    	return 'slug';
    }
}
