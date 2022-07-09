<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class AboutController extends Controller
{
    public function index(): Response {
        return response()->view('about', [
            'title' => 'About',
            'active'=> 'about'
        ]);
    }
}
