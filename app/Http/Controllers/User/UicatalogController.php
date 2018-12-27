<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\user\catalog;

class UicatalogController extends Controller
{
    //return to view sayang
    public function index(){

    	$catalogs = catalog::where('status', 1)->get();
    	return view('user.catalog.catalog', compact('catalogs'));
    }
}
