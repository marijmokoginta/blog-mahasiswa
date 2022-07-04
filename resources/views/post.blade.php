@extends('layouts.main')

@section('container')
    <div class="container">
        <h2 class="text-center">{{ $post->title }}</h2>
        <h6 class="text-center">Created by: {{ $post->author }} in
            <i><a class="text-decoration-none text-info" href="/post/category/programming">{{ $post->category->name }}</a></i></h6>
        <p>{{ $post->body }}</p>
    </div>
@endsection
