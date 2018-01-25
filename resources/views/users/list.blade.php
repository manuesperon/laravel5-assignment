@extends('common.layout')

@section('title')
  <title>Users</title>
@endsection


@section('content')

@if($users->count() > 0)
  
  <table class="table table-hover">

    <thead class="thead-default">
      <th>Id</th>
      <th>Name</th>
      <th>Age</th>
      <th>Phone</th>
      <th>Email</th>
      <th>Created at</th>
      <th>Delete</th>
    </thead>

    <tbody>

    @foreach($users as $user)
      
      <tr>
        <td>{{ $user->id }}</td>
        <td><a href="/users/{{ $user->id }}">{{ $user->name }}</a></td>
        <td>{{ $user->age }}</td>
        <td>{{ $user->phone }}</td>
        <td>{{ $user->email }}</td>
        <td>{{ $user->created_at->format('m-d-Y') }}</td>
        <td><a style="color:red" href="/users/delete/{{$user->id}}">x</a></td>
        </tr>

    @endforeach

    </tbody>

</table>

<button class="btn btn-default" Onclick="window.location.href='/users/create'">Add new user</button>

@else

No users
@endif

@endsection