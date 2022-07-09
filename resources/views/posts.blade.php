@extends('layouts.main')

@section('text-box')
    <div class="text-box">
        <p class="container fs-6">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab corporis dolore dolorem doloremque eaque enim eos error eum expedita illo illum inventore labore, libero nostrum placeat quibusdam sequi veritatis voluptatem.</p>
        <h4>{{$title}}</h4>
        <div class="row justify-content-center mt-3">
            <div class="col-sm-6">
                <form action="/posts">
                    @if(request('category'))
                        <input type="hidden" name="category" value="{{ request('category') }}">
                    @endif
                    @if(request('author'))
                        <input type="hidden" name="author" value="{{ request('author') }}">
                    @endif
                    <div class="input-group mb-3">
                        <input type="text" class="form-control bg-transparent text-light" placeholder="Search..." name="search" value="{{ request('search') }}">
                        <button type="submit" class="btn btn-primary">Search</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('container')

    @if($posts->count())
        <div class="card mb-3">
            <img src="https://source.unsplash.com/1200x400?{{ $posts[0]->category->name }}" alt="{{ $posts[0]->title }}" class="card-img-top">
            <div class="card-body text-center">
                <h4 class="card-title">{{ $posts[0]->title }}</h4>
                <p>
                    <small class="text-muted">
                        By: <a href="/posts?author={{ $posts[0]->user->name }}" class="text-decoration-none text-muted">{{ $posts[0]->user->name }}</a> in {{ $posts[0]->category->name }}
                        {{ $posts[0]->updated_at->diffForHumans() }}
                    </small>
                </p>
                <small>views : {{ $posts[0]->views }}</small>
                <p>{{ $posts[0]->excerp }}</p>
                <a href="/posts/preview/{{ $posts[0]->slug }}" class="text-decoration-none btn btn-primary">Read more</a>
            </div>
        </div>

        <div class="container">
            <div class="row">
                @foreach($posts->skip(1) as $post)
                    <div class="col-sm-4 mb-3">
                        <div class="card">
                            <div class="position-absolute px-3 py-2" style="background-color: rgba(0,0,0,0.7)">
                                <a class="text-decoration-none text-light" href="/posts?category={{ $post->category->slug }}">
                                    {{$post->category->name}}
                                </a>
                            </div>
                            <img src="https://source.unsplash.com/500x400?{{ $post->category->name }}" alt="{{ $post->title }}" class="card-img-top img-fluid">
                            <div class="card-body">
                                <h5 class="card-title">{{ $post->title }}</h5>
                                <p>
                                    <small class="text-muted">
                                        By: <a href="/posts?author={{ $post->user->name }}" class="text-decoration-none text-muted">{{ $post->user->name }}</a> {{ $post->updated_at->diffForHumans() }}
                                    </small>
                                </p>
                                <small>views : {{ $post->views }}</small>
                                <p class="card-text">{{ $post->excerp }}</p>
                                <a href="/posts/preview/{{ $post->slug }}" class="text-decoration-none btn btn-primary">Read more</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    @else
        <p class="text-center">Nothing to show</p>
    @endif

    <div class="d-flex justify-content-center">
        {{ $posts->links() }}
    </div>
@endsection
