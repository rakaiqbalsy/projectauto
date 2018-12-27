<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\user\event;

class EventController extends Controller
{
    public function post(event $event) {
    	return view('user.event.detail-event',compact('event'));
    }
}
