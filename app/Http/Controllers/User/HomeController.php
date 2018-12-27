<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\user\berita;

class HomeController extends Controller
{
    public function index() {

    	$beritas = berita::where('status', 1)->paginate(5);
    	return view('user.home',compact('beritas'));

    }
}
