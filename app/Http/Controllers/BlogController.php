<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function store(){
		return view('store');
	}
	
	public function admin(){
		return view('admin');
	}
	
	public function products(){
		return view('products');
	}
 
	// public function kontak(){
	// 	return view('kontak');
	// }
}
