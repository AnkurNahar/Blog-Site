@extends('layouts.app')

@section('content') 
  <h1 style="padding-top:16px">Create Post</h1>
    {!! Form::open(['action' => 'PostsController@store', 'method' => 'POST']) !!}
    <div class="form-group">
        {{Form::label('title', 'Title')}}
        {{Form::text('title','',['class' => 'form-control', 'placeholder' => 'Enter Title'])}}
    </div>
    <div class="form-group">
        {{Form::label('body', 'Post Body')}}
        {{Form::textarea('body','',['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Enter body text here...'])}}
    </div>
    {{Form::submit('Post', ['class' => 'btn btn-danger'])}}
    {!! Form::close() !!}
  
@endsection