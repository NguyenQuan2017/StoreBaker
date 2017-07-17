<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function getHome(){

    	return view('pages/index');
    }

    public function getTypeProduct(){

    	return view('pages/type-product');
    }

    public function getProduct(){

    	return view('pages/product');
    }
}
