<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Request $request): RedirectResponse {
        $validatedData = $request->validate([
            'post_id' => 'required',
            'email' => 'required|email:dns',
            'message' => 'required|min:15'
        ]);

        Comment::create($validatedData);

        return back();
    }
}
