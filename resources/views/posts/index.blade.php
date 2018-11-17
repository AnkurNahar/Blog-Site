@extends('layouts.appi')

@section('content') 
  <h1 style="padding-top:16px">Posts</h1>
 
   @if(count($posts) > 0) 
    @foreach ($posts as $post)
    <div class="card">
        <div class="card-body">
        <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
        <small>Posted on {{$post->created_at}}</small>
        </div>
    </div>
    @endforeach
    {{$posts->links()}}
    @else 
    <p>No posts yet</p>
   @endif
   
@endsection