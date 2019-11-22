<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Products;

class ProductController extends Controller
{
    public function index(){
		$data = Products::all();
		return view('products', ['products' => Products::all()]);
		
	}
	
	public function addProduct(){
		
		return view('addProduct');

	}
	
	public function saveProduct(){
		
		$input = request()->all();
        $input['image_url'] = Storage::disk('local')->url(request()->image_url->store('public'));
        Products::create($input);
        return redirect('products')->with('success','Product has been created successfully');
		
	}
}
