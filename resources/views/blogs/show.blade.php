@extends('layouts.app')
@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-12 pt-2">
                 <div class="row">
                    <div class="col-8">
                    <a href="/post" class="btn btn-outline-primary btn-sm">Go back</a>
                        <h1 class="display-one">{{ $post->title}}</h1>
                        <p>{!! $post->body !!}</p>
                        <P>{{$post->user_id}}</P>
                    </div>
                    <div class="col-4">
                       
                    <a href="/post/{{ $post->id }}/edit" class="btn btn-outline-primary">Edit Post</a>
                    </div>
                </div>                
                <form id="delete-frm" class="" action="" method="POST">
                    @method('DELETE')
                    @csrf
                    <button class="btn btn-danger">Delete Post</button>
                </form>
                
            </div>
        </div>
    </div>
@endsection