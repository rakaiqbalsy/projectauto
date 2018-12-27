<?php

namespace App\Model\user;

use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    public function posts() {
		return $this->belongsToMany('app\Model\user\berita','category_post');
	}
}
