@extends('layouts.app')

@section('titulo')   
Post
@endsection


@section('content')
        <div class="elpost">
            <h1>{{$post->titulo}}</h1>

            <img src="/storage/{{$post->img}}" alt="">

            <p>{{$post->contenido}}</p>
        </div>
@endsection