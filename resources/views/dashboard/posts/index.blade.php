@extends('dashboard.layouts.main')

@section('container')
<div class="container mt-5">
    <h3 class="">My Blogs</h3>
    <table class="mt-3">
        <thead>
            <tr>
                <th>#</th>
                <th>Title</th>
                <th>Views</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($posts as $post)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $post->title }}</td>
                <td>{{ $post->views }}</td>
                <td>Edit | hapus</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection