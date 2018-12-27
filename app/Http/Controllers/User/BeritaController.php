<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\user\berita;

class BeritaController extends Controller
{
    public function post(berita $news) {
    	return view('user.detail',compact('news'));    	
    }
}
