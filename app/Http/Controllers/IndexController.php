<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Categoria;


class IndexController extends Controller
{
    public function index()
    {
        $posteos = Post::all()->take(6);
        $categorias = Categoria::all(); 

        return view('home.index', compact('posteos', 'categorias'));
    }

    public function categorias(){
        $categorias = Categoria::all(); 
        
        return view('home.categoria', compact('categorias'));
    }

    public function posteosCat($id){
        $posteos = Post::all()->where('categoria', '=', $id);
        
        return view('home.posteos', compact('posteos'));
    }

}
