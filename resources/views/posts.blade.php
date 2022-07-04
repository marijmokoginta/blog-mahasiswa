@extends('layouts.main')

@section('text-box')
    <div class="text-box">
        <h1>Posts</h1>
    </div>
@endsection

@section('container')
    <div class="row mt-4">
        <div class="col-sm-8">
            @foreach($posts as $post)
                <h4>
                    <a href="/posts/preview/{{ $post->slug }}" class="text-decoration-none">{{ $post->title }}</a>
                </h4>
                <h6>By: {{ $post->author }} | <i class="text-small text-warning">{{ $post->category->name }}</i></h6>
                <p>{{ $post->excerp }}</p>
            @endforeach
        </div>
        <div class="col-sm-4">
            <table class="table table-hover">
                <tr>
                    <th>#</th>
                    <th>Category</th>
                </tr>
                @foreach($categories as $index => $category)
                    <tr>
                        <td>{{$index + 1}}</td>
                        <td>
                            <a class="text-decoration-none text-dark" href="/posts/category/{{ $category->id }}">
                                {{$category->name}}
                            </a>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
@endsection
