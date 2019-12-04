<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class AdminController extends Controller
{
    public function index()
    {
        $posts = Post::all();
       return view('admin.admin', compact('posts'));
    }

    public function indexposts()
    {
        return view('admin.post');
    }

    public function indexusuarios()
    {
        return view('admin.usuarios');
    }

    public function agregarPost(Request $req)
    {
        $this->validate($req, 
        [ 
            'titulo' => "required|max:200|unique:post,titulo",
            'imagen' => "required|image",
            'contenido' => "required|max:3000"
        ],

        [   
            'titulo' => "El :attribute esta repetido",
            'required' => "El :attribute es obligatorio",
            'max' => "El :attribute es demaciado largo",
            'image' => "La :attribute debe ser jpg, jpeg o png"
        ]


        );

        $path = $req->file('imagen')->store('public');

        $nombreArchivo = basename($path);

        $post = new Post();

        $post->titulo = $req['titulo'];
        $post->img = $nombreArchivo;
        $post->categoria = $req['categoria'];
        $post->contenido = $req['contenido'];

        $post->save();

        return redirect('/admin');
    }

    public function mostrar($id)
    {
        $post = Post::find($id);

        return view('admin.mostrar', compact('post'));
    }

    public function modificar(Request $req)
    {

        $id = $req["id"];
        
        $post = Post::find($id);

        if ( $req["imagen"]) {
            $path = $req->file('imagen')->store('public');

            $nombreArchivo = basename($path);
            $post->img = $nombreArchivo;
        }


        $post->titulo = $req['titulo'];
        $post->categoria = $req['categoria'];
        $post->contenido = $req['contenido'];

        $post->save();

        return redirect('/admin');
    }
}
