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
        <form  class="container" action="/admin/post"  method="POST" enctype="multipart/form-data">
            @csrf

            <label for="titulo">Titulo</label>
            <input type="text" id="titulo" name="titulo" required placeholder="Titulo.."  value="{{old('titulo')}}">

            <br>

            <label for="imagen">Imagen</label>
            <input type="file" id="imagen" name="imagen" required  value="{{old('imagen')}}">

            <br>

            <label for="categoria">Categoria</label>
            <br>
            <select class="categoria" name="categoria" id="categoria" value="{{old('categoria')}}">
                <option value="Otro">Otro</option>
                <option value="europa">Europa</option>
                <option value="america">America</option>
                <option value="asia">Asia</option>
                <option value="africa">Africa</option>
                <option value="oceania">Oceania</option>
            </select>

            <label for="contenido">Conentido del Post</label>
            <textarea id="contenido" name="contenido"  style="height:200px" value="{{old('contenido')}}"></textarea>
            
            <button type="submit" name="submit">Enviar</button>
            <input type="reset" value="Borrar">

        </form>
   </div>
@endsection