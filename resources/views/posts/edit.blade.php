@extends('layouts.app')

@section('content') 
  <h1 style="padding-top:16px">Edit Post</h1>
    {!! Form::open(['action' => ['PostsController@update', $post->id], 'method' => 'POST']) !!}
    <div class="form-group">
        {{Form::label('title', 'Title')}}
        {{Form::text('title', $post->title, ['class' => 'form-control', 'placeholder' => 'Enter Title'])}}
    </div>
    <div class="form-group">
        {{Form::label('body', 'Post Body')}}
        {{Form::textarea('body', $post->body, ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Enter body text here...'])}}
    </div>
    {{Form::hidden('_method', 'PUT')}}
    {{Form::submit('Post', ['class' => 'btn btn-danger'])}}
    {!! Form::close() !!}
  
@endsection