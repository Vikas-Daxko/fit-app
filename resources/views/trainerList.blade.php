@extends('layouts.app')

@section('content')
<div class="container col-md-12" >
    @include('partials.pageHeader', ['showHr' => false ,'isAdd' => false, 'linkName'=>'Trainers', 'link' => '', 'name'=> 'Trainers'])
<table class="table">
  <thead>
    <tr>
      <th scope="col">S.No.</th>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Status</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($users as $user)
    <tr>
    <th>{{$loop->iteration}}</th>
      <th scope="row">TRA{{$user->id}}</th>
      <td>{{$user->name}}</td>
      <td>{{$user->email}}</td>
      <td>
          @include('partials.userStatus', ['status' => $user->status])
      </td>
      <td>
        <a href="">View</a>
        <a href="">Edit</a>
        <a href="">Delete</a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>
@endsection
