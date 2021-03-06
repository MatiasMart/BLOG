<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Categoria;
use App\Comentario;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;


class IndexController extends Controller
{
    public function index()
    {
        $posteos = Post::orderBy('id', 'desc')->paginate(6);
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


    public function mostrarPost($id){

        $post = Post::find($id);

        $comentarios = $post->comentarios;
        if ($comentarios != []) {
            $usuarios = [];
            foreach ($comentarios as $comentario){
                $usuarios[] = $comentario->usuarios;
            }
            return view('home.post', compact('post', 'comentarios', 'usuarios'));
        } 

        if ($comentarios){
            $comentarios = [];
            return view('home.post', compact('post', 'comentarios'));
        }
  

        
        
    
        /* return view('home.post', compact('post', 'comentarios', 'usuarios')); */
    }

    public function agregarComentario(Request $req){
        if (Auth::user()) {
            $comentario = new Comentario;

            $idPost = $req["id"];
            $idUser = Auth::user()->id;

            $comentario->id_post = $idPost;
            $comentario->id_usuario = $idUser;
            $comentario->comentario = $req->input("comentario");

            $comentario->save(); 

            return Redirect::back();
    
    
        }
        else {
            return redirect('/login')->with('mensaje', 'Para hacer comentarios debes estar logeado');
        }

    }


    public function mostrarContacto(){
        return view('home.contacto');
    }

}
