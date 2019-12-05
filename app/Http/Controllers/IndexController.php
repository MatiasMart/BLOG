<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class IndexController extends Controller
{
    public function index()
    {
        $posteos = Post::all();

        return view('home.index', compact('posteos'));
    }
}
