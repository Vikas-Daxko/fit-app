<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recipes extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['meal_id', 'name', 'image_url', 'food_type', 'meal_type', 'duration', 'cals', 'nutritional_info', 'ingredients', 'prepration'];

    public static function getRecipes($id)
    {
        return self::where('meal_id', $id)->get();
    }
}
