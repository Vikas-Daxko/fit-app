<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Products;

class ProductController extends Controller
{
    public function index(){
		
		return view('products', ['products' => Products::all()]);
		
	}
}
