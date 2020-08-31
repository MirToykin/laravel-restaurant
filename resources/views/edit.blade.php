@extends('layout')

@section('content')
  <h1>Edit restaurant</h1>
  <div class="col-sm-6">
    <form method="post" action="/update">
      <div class="form-group">
        <label>Name</label>
        <input type="text" name="name" value="{{$data->name}}" class="form-control" placeholder="Enter name">
      </div>
      <div class="form-group">
        <label>Email</label>
        <input type="text" name="email" value="{{$data->email}}" class="form-control" placeholder="Enter email">
      </div>
      <div class="form-group">
        <label>Address</label>
        <input type="text" name="address" value="{{$data->address}}" class="form-control" placeholder="Enter address">
      </div>
      <input type="hidden" name="id" value="{{$data->id}}">
      @csrf
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
@stop
