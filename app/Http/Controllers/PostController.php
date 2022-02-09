<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = [
            'mon super premier titre',
            'mon super second titre'
        ];

        return view('articles', compact('posts'));
    }
}
