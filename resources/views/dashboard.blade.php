@extends('layouts.app')

@section('content')
<div class="container" style="padding-top: 16px">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h3>Blog Posts</h3>
                    <a href="/posts/create" class="btn btn-danger">Create New Post</a>
                    @if(count($posts) > 0)
                    <table class="table table-striped" style="margin-top:16px">
                        @foreach ($posts as $post)
                            <tr>
                                <td>{{$post->title}}</td>
                                <td><a href="/posts/{{$post->id}}/edit" class="btn btn-light">Edit</a></td>
                                <td>
                                    {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST'])!!}
                                      {{Form::hidden('_method', 'DELETE')}}
                                      {{Form::submit('Delete', ['class' => 'btn btn-light'])}}
                                    {!!Form::close()!!}
                                </td>
                                  
                                
                            </tr>
                        @endforeach
                    </table>
                    @else 
                     <p>No posts to show</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
