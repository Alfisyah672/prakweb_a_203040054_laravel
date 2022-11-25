@extends('dashboard.layouts.main')

@section('container')
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <h1 class="my-3">{{ $post->title }}</h1>

                <a href="/dashboard/posts" class="btn btn-success my-2">Back To All Post</a>
                <a href="" class="btn btn-warning my-2">Edit</a>
                <a href="" class="btn btn-danger my-2">Delete</a>

                <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}"
                    alt="{{ $post->category->name }}" class="img-fluid">

                <article class="my-3 fs-5">
                    {!! $post->body !!}
                </article>

            </div>
        </div>
    </div>
@endsection
