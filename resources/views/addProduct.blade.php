@extends('layouts.app')

@section('content')
<div class="container col-md-12" >
 @include('partials.pageHeader', ['showHr' => true ,'isAdd' => false, 'linkName'=>'Add Product', 'link' => '', 'name'=>'Add Product'])
 <form action="{{ route('saveProduct') }}" method="POST" enctype="multipart/form-data">
    {{ csrf_field() }}    
    <div class="form-group">
          <label for="exampleFormControlInput1">Name</label>
          <input type="text" name="name" class="form-control" id="" placeholder="Name">
        </div>
        <div class="form-group">
          <label for="exampleFormControlTextarea1">Description</label>
          <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
		<div class="form-group">
          <label for="exampleFormControlInput2">Price</label>
          <input type="text" name="price" class="form-control" id="" placeholder="Price">
        </div>
        <div class="form-group">
                <label for="exampleFormControlFile1">Example file input</label>
                <input type="file" name="image_url" class="form-control-file" id="exampleFormControlFile1">
              </div>
        <button type="submit" class="btn btn-primary">Add</button>
      </form>
</div>
@endsection