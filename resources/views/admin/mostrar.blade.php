@extends('layouts.plantillaAdmin')



@section('contenido')
<div class="post">

        @if (count($errors) > 0)
            
       
            <div class="alert alert-danger">
    
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
    
            </div>
        @endif
            <form  class="container" action="/admin/modificar/{{$post->id}}"  method="POST" enctype="multipart/form-data">
                @csrf

                <input type="hidden" name="id" value="{{$post->id}}">
    
                <label for="titulo">Titulo</label>
                <input type="text" id="titulo" name="titulo" required placeholder="Titulo.."  value="{{$post->titulo}}">
    
                <br>
    
                <label for="imagen">Imagen Anterior</label>
                <br>
                <img src="/storage/{{$post->img}}" alt="">
                <input type="file" id="imagen" name="imagen" value="">
    
                <br>
    
                <label for="categoria">Categoria</label>
                <br>
                <select class="categoria" name="categoria" id="categoria" value="{{$post->categoria}}">
                    <option value="Otro">Otro</option>
                    <option value="europa">Europa</option>
                    <option value="america">America</option>
                    <option value="asia">Asia</option>
                    <option value="africa">Africa</option>
                    <option value="oceania">Oceania</option>
                </select>
    
                <label for="contenido">Conentido del Post</label>
                <textarea id="contenido" name="contenido"  style="height:500px" >{{$post->contenido}}</textarea>
                
                <button type="submit" name="submit">Modificar</button>
    
            </form>
       </div>
       @endsection