<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected $fillable = ['name','price','description', 'image_url'];
	
	public $timestamps = false;
}
