@extends('layouts.app')

@section('content')
<div class="container col-md-12" >
 @include('partials.pageHeader', ['showHr' => true ,'isAdd' => true, 'linkName'=>'Add Product', 'link' => 'addProduct', 'name'=>'Products'])
<div class="row">
   @foreach ($products as $product)
   <div class="col-sm-3">
         <div class="card mt-4" style="width: 18rem;">
         <img class="card-img-top" src="{{ asset($product->image_url) }}" height="149" width="149" alt="Card image cap">
               <div class="card-body">
                  <h5 class="card-title">{{ $product->name }}</h5>
                  {{-- <p class="card-text">{{ $product->decs }}</p> --}}
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