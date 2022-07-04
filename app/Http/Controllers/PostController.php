<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class PostController extends Controller
{
    public function index(Post $post = null): Response
    {
        if ($post == null) {
            $post = Post::all()->sortDesc();
        }
        return response()->view('posts', [
            'title' => 'Posts',
            'posts' => $post,
            'categories' => Category::all()
        ]);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Post $post): Response
    {
        return response()->view('post', [
            'title' => 'Preview',
            'post' => $post
        ]);
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
