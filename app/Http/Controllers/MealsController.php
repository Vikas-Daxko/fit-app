<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Meals;

class MealsController extends Controller
{
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
    public function saveMeal()
    {
        $input = request()->all();
        $input['image_url'] = Storage::disk('local')->url(request()->image_url->store('public'));
        Meals::create($input);
        return redirect('meals');

    }
}
