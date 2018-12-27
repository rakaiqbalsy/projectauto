<?php

namespace App\Model\user;

use Illuminate\Database\Eloquent\Model;

class tags extends Model
{
	public function posts() {
		return $this->belongsToMany('app\Model\user\berita','post_tags');
	}
}
