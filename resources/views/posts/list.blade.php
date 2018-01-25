@extends('common.layout')

@section('title')
  <title>Posts</title>
@endsection


@section('content')
<div class="row">
@if($posts)

@foreach($posts as $post)

  <div class="card" style="width: 20rem;">
    <div class="card-block">
      <h4 class="card-title">{{$post->title}}</h4>
      <p class="card-text">{{$post->body}}</p>
    </div>
  </div>

@endforeach

@else

No posts

@endif
</div>

@endsection