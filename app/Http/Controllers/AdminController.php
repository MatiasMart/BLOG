<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Http\Controllers\Helper;
use App\User;

class AdminController extends Controller
{
    public function index()
    {
        if (Helper::noEsAdmin()){
            return redirect("/");
        }
        $posts = Post::all()->sortByDesc("created_at");
       return view('admin.admin', compact('posts'));
    }

    public function indexposts()
    {
        if (Helper::noEsAdmin()){
            return redirect("/");
        } 
        return view('admin.post');
    }

    public function indexusuarios()
    {
        if (Helper::noEsAdmin()){
            return redirect("/");
        }
        return view('admin.usuarios');
    }

    public function agregarPost(Request $req)
    {
        if (Helper::noEsAdmin()){
            return redirect("/");
        }
        $this->validate($req, 
        [ 
            'titulo' => "required|max:200|unique:post,titulo",
            'imagen' => "required|image",
            'contenido' => "required|max:15000"
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
        if (Helper::noEsAdmin()){
            return redirect("/");
        }
        $post = Post::find($id);

        return view('admin.mostrar', compact('post'));
    }

    public function modificar(Request $req)
    {
        if (Helper::noEsAdmin()){
            return redirect("/");
        }

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


    public function eliminar($id){

        if (Helper::noEsAdmin()){
            return redirect("/");
        }
        $post = Post::find($id);
        $post->delete();
    
        return redirect("/admin");

    }

    public function usuarios(){
        if (Helper::noEsAdmin()){
           return redirect("/");
       }
       $usuarios = User::all();


       return view('admin.usuarios', compact('usuarios'));
   }

   public function usuariosEliminar($id){
    if (Helper::noEsAdmin()){
       return redirect("/");
   }
   $usuarios = User::find($id);


   $usuarios->delete();

   return redirect("/admin/usuarios");

}
}
