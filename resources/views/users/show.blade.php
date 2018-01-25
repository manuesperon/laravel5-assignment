@extends('common.layout')

@section('title')
  <title>{{$user->name}}</title>
@endsection

@section('content')

<div class="container">
  <div class="row">
    <label class="col-2">Name:</label>
    <label class="col-2 blue">{{$user->name}}</label>
  </div>

  <div class="row">
    <label class="col-2">Age:</label>
    <label class="col-2 blue">{{$user->age}}</label>
  </div>

  <div class="row">
    <label class="col-2">Phone:</label>
    <label class="col-2 blue">{{$user->phone}}</label>
  </div>

  <div class="row">
    <label class="col-2">Email:</label>
    <label class="col-2 blue">{{$user->email}}</label>
  </div>

  <button class="btn btn-default" Onclick="window.location.href='/users/'">Back</button>
  
</div>

@endsection