<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Meals extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'decs', 'image_url'];
}
