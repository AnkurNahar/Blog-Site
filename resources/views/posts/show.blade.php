@extends('layouts.appi')

@section('content') 
  <h1 style="padding-top:16px">{{$post->title}}</h1>
  <div><p>{!!$post->body!!}</p></div>
  <hr>
  <small>Posted on {{$post->created_at}}</small>
@endsection