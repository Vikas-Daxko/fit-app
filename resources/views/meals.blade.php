@extends('layouts.app')

@section('content')
<div class="container col-md-12" >
 @include('partials.pageHeader', ['showHr' => true ,'isAdd' => true, 'linkName'=>'Add Meal', 'link' => 'addMeal', 'name'=>'Meals'])
<div class="row">
   @foreach ($meals as $meal)
   <div class="col-sm-3">
         <div class="card mt-4" style="width: 18rem;">
         <img class="card-img-top" style="object-fit:cover;" src="{{ asset($meal->image_url) }}" height="149" width="149" alt="Card image cap">
               <div class="card-body">
               <h5 class="card-title"><a href="{{ route('recipes', $meal->id, true) }}">{{ $meal->name }}</a> </h5>
                  {{-- <p class="card-text">{{ $meal->decs }}</p> --}}
               </div>
         </div>
        </div>       
   @endforeach

        <div class="col-sm-3 mt-4">
            <div class="card" style="width: 18rem;">
                  <img class="card-img-top" src="https://www.bageterie.com/files/1740-kuchar-bezpozadi-letnimenu2018-800x800.png" height="149" width="149" alt="Card image cap">
                  <div class="card-body">
                     <h5 class="card-title">By Users</h5>
                     {{-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> --}}
                  </div>
            </div>
         </div>
     </div>
   </div>
     @endsection