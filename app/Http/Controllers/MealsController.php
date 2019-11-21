<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Meals;
use App\Recipes;

class MealsController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('meals', ['meals' => Meals::all()]);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function addMealPage()
    {
       return view('addMeal');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function addRecipePage($id)
    {
       return view('addRecipe', ['meal'=>Meals::find($id)]);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function recipeList($id)
    {
       return view('recipeList', ['recipes' => Recipes::getRecipes($id), 'meal'=>Meals::find($id)]);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function saveMeal()
    {
        $input = request()->all();
        $input['image_url'] = Storage::disk('local')->url(request()->image_url->store('public'));
        Meals::create($input);
        return redirect('meals');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function saveRecipe()
    {
        $input = request()->all();
        $input['image_url'] = Storage::disk('local')->url(request()->image_url->store('public'));
        Recipes::create($input);
        return redirect('recipes/'.$input['meal_id']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function deleteRecipe($id)
    {
        Recipes::find($id)->delete();
        return redirect()->back();
    }
}
