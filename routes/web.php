<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'UserController@index')->name('home');
Route::get('/users', 'UserController@index')->name('users');
Route::get('/meals', 'MealsController@index')->name('meals');
Route::get('/recipes/{id}', 'MealsController@recipeList')->name('recipes');
Route::get('/addRecipe/{id}', 'MealsController@addRecipePage')->name('addRecipe');
Route::get('/deleteRecipe/{id}', 'MealsController@deleteRecipe')->name('deleteRecipe');
Route::get('/trainer', 'UserController@getTrainer')->name('trainer');
Route::get('/addMeals', 'MealsController@addMealPage')->name('addMeal');
Route::post('/saveMeal', 'MealsController@saveMeal')->name('saveMeal');
Route::post('/saveRecipe', 'MealsController@saveRecipe')->name('saveRecipe');
Route::get('/products', 'ProductController@index')->name('products');
Route::get('/addproduct', 'ProductController@addProduct')->name('addProduct');
