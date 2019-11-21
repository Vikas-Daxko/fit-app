@extends('layouts.app')

@section('content')
<div class="container col-md-12" >
 @include('partials.pageHeader', ['showHr' => true ,'isAdd' => false, 'linkName'=>'Add Recipe', 'link' => '', 'name'=>'Add Meal'])
 <form action="{{ route('saveRecipe') }}" method="POST" enctype="multipart/form-data">
    {{ csrf_field() }}    
    <input type="hidden" name="meal_id" value={{ $meal->id }}>
        <div class="form-group">
          <label for="exampleFormControlInput1">Name</label>
          <input type="text" name="name" class="form-control" id="" placeholder="Name">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Food type</label>
            <select class="form-control" name="food_type" id="exampleFormControlSelect1">
                <option value="1">Veg</option>
                <option value="2">Non Veg</option>
              </select>
          </div>
          <div class="form-group">
            <label for="exampleFormControlInput1">Meal type</label>
            <select class="form-control" name="meal_type" id="exampleFormControlSelect1">
                <option value="1">Breakfast</option>
                <option value="2">Lunch</option>
                <option value="3">Dinner</option>
              </select>
          </div>
          <div class="form-group">
            <label for="exampleFormControlInput1">Duration(In Minute)</label>
            <input type="text" name="duration" class="form-control" id="" placeholder="Ex. 10">
          </div>
          <div class="form-group">
            <label for="exampleFormControlTextarea1">Calories</label>
            <input type="text" name="cals" class="form-control" id="" placeholder="Ex. 100 Cal">
          </div>
        <div class="form-group">
          <label for="exampleFormControlTextarea1">Description</label>
          <textarea class="form-control" name="decs" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
          <div class="form-group">
            <label for="exampleFormControlTextarea1">Nutritional Info</label>
            <textarea class="form-control" name="nutritional_info" id="exampleFormControlTextarea1" rows="3"></textarea>
          </div>
          <div class="form-group">
            <label for="exampleFormControlTextarea1">Ingredients</label>
            <textarea class="form-control" name="ingredients" id="exampleFormControlTextarea1" rows="3"></textarea>
          </div>
          <div class="form-group">
            <label for="exampleFormControlTextarea1">Prepration</label>
            <textarea class="form-control" name="prepration" id="exampleFormControlTextarea1" rows="3"></textarea>
          </div>
        <div class="form-group">
                <label for="exampleFormControlFile1">Example file input</label>
                <input type="file" name="image_url" class="form-control-file" id="exampleFormControlFile1">
              </div>
        <button type="submit" class="btn btn-primary">Add</button>
      </form>
</div>
@endsection