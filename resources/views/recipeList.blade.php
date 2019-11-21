@extends('layouts.app')

@section('content')
<div class="container col-md-12" >
    @include('partials.pageHeader', ['showHr' => false ,'isAdd' => true, 'linkName'=>'Add Recipes', 'link' => 'addRecipe', 'name'=> $meal->name, 'id'=> $meal->id])
<table class="table">
  <thead>
    <tr>
      <th scope="col">S.No.</th>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Veg/NonVeg</th>
      <th scope="col">Type</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($recipes as $recipe)
    <tr>
    <th>{{$loop->iteration}}</th>
      <th scope="row">RES{{$recipe->id}}</th>
      <td>{{$recipe->name}}</td>
      <td>
          @include('partials.mealType', ['type' => $recipe->food_type])
      </td>
      <td>
          @include('partials.foodType', ['type' => $recipe->meal_type])
      </td>
      <td>
        <a href="">View</a>
        <a href="">Edit</a>
      <a href="{{route('deleteRecipe', $recipe->id)}}">Delete</a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>
@endsection
