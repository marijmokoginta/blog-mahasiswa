<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class PostController extends Controller
{
    public function index(): Response
    {
        $title = '';
        if (request('category')) {
            $category = Category::query()->where('slug', request('category'))->first();
            $title = " in $category->name";
        } else if (request('author')) {
            $author = User::query()->where('name', request('author'))->first();
            $title = " by $author->name";
        }
        return response()->view('posts', [
            'title' => "All Post $title",
            'active' => 'blog',
            'posts' => Post::latest()->filters(request(['search', 'category', 'author']))->paginate(7)
        ]);
    }

    public function show(Post $post): Response
    {
        $post->views = $post->views + 1;
        $post->save();
        return response()->view('post', [
            'title' => 'Preview',
            'active' => 'blog',
            'post' => $post
        ]);
    }
}
