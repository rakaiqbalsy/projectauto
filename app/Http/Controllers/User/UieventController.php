<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\user\event;

class UieventController extends Controller
{
    public function index(){

    	$events = event::where('status', 1)->get();
    	return view('user.event.event', compact('events'));
    }
}
