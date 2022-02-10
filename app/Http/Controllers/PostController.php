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

    public function show($id)
    {
        $posts = [
            1 => 'Mon titre N°1',
            2 => 'Mon titre N°2'
        ];

        $post = $posts[$id] ?? 'pas de titre';

        return view('article', [
            'post' => $post
        ]);
    }

    public function contact()
    {
        return view('contact');
    }
}
