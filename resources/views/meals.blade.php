@extends('layouts.app')

@section('content')
<div class="container col-md-12" >
 @include('partials.pageHeader', ['showHr' => true ,'isAdd' => true, 'linkName'=>'Add Meal', 'link' => '', 'name'=>'Meals'])
<div class="row">
        <div class="col-sm-3">
         <div class="card mt-4" style="width: 18rem;">
               <img class="card-img-top" src="https://www.englishclub.com/images/vocabulary/food/indian/indian-food-640.jpg" height="149" width="149" alt="Card image cap">
               <div class="card-body">
                  <h5 class="card-title">Indian</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
               </div>
         </div>
        </div>
        <div class="col-sm-3">
            <div class="card mt-4" style="width: 18rem;">
                  <img class="card-img-top" src="https://52f073a67e89885d8c20-b113946b17b55222ad1df26d6703a42e.ssl.cf2.rackcdn.com/_800x1000_fit_center-center/chens-chinese-food.jpg" height="149" width="149" alt="Card image cap">
                  <div class="card-body">
                     <h5 class="card-title">Chinese</h5>
                     <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  </div>
            </div>
        </div>
        <div class="col-sm-3 mt-4">
            <div class="card" style="width: 18rem;">
                  <img class="card-img-top" src="https://www.dineout.co.in/blog/wp-content/uploads/2019/01/shutterstock_246954469-1-1030x538.jpg" height="149" width="149" alt="Card image cap">
                  <div class="card-body">
                     <h5 class="card-title">Italian</h5>
                     <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  </div>
            </div>
        </div>
        <div class="col-sm-3 mt-4">
            <div class="card" style="width: 18rem;">
                  <img class="card-img-top" src="https://www.smh.com.au/content/dam/images/g/q/g/o/m/7/image.imgtype.articleLeadwide.620x349.png/1470795920571.jpg" height="149" width="149" alt="Card image cap">
                  <div class="card-body">
                     <h5 class="card-title">American</h5>
                     <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  </div>
            </div>
        </div>
        <div class="col-sm-3 mt-4">
            <div class="card" style="width: 18rem;">
                  <img class="card-img-top" src="https://www.bageterie.com/files/1740-kuchar-bezpozadi-letnimenu2018-800x800.png" height="149" width="149" alt="Card image cap">
                  <div class="card-body">
                     <h5 class="card-title">By Users</h5>
                     <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  </div>
            </div>
         </div>
     </div>
   </div>
     @endsection