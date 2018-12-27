<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\user\catalog;

class CatalogController extends Controller
{
     public function post(catalog $car) {

     	//return ke detailnya
    	return view('user.catalog.detail-catalog',compact('car'));    	
    }
}
