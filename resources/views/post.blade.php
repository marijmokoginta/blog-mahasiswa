@extends('layouts.main')

@section('container')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-8">
                <h2 class="text-center">{{ $post->title }}</h2>
                <h6 class="text-center">Created by: <a class="text-decoration-none text-dark" href="/posts?author={{ $post->user->name }}">{{ $post->user->name }}</a> in
                    <i><a class="text-decoration-none text-dark" href="/posts?category={{ $post->category->slug }}">{{ $post->category->name }}</a></i></h6>
                <p class="text-small pb-3 text-center">{{ $post->updated_at->format('d-m-y') }}</p>
                <small class="text-center">views : {{ $post->views }}</small>
                <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" alt="{{ $post->title }}" class="card-img-top img-fluid">
                <p>{{ $post->body }}</p>
            </div>
        </div>
        <div class="min-vh-60"></div>
        <div class="row justify-content-center mt-4">
            <div class="col-lg-8">
                <hr>
                @foreach($post->comments as $comment)
                    <h6 class="mt-4">{{ $comment->email }}</h6>
                    <small>{{ $comment->message }}</small>
                @endforeach
                <hr>
                <h5>Put your comment</h5>
                <form action="/comment" method="post">
                    @csrf
                    <input type="hidden" name="post_id" value="{{ $post->id }}">
                    <div class="input-group mb-3">
                        <input type="email" class="form-control @error('email') is-invalid @enderror" placeholder="email@exampel.com" name="email" required>
                    </div>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control @error('message') is-invalid @enderror" placeholder="comment..." name="message" required>
                    </div>
                    <button class="btn btn-primary w-100" type="submit">Send</button>
                </form>
            </div>
        </div>
    </div>
@endsection
