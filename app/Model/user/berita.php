<?php

namespace App\Model\user;

use Illuminate\Database\Eloquent\Model;

class berita extends Model
{
    public function tags() {
    	return $this->hasMany('App\Model\user\tags','post_tags');
    }

    public function categories() {
    	return $this->hasMany('App\Model\user\tags','category_post');
    }

    public function getRouteKeyName() {
    	return 'slug';
    }
}
