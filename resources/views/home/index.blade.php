@extends('layouts.app')

@section('links')   
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
@endsection


@section('titulo')   
Mi Blog
@endsection




@section('content')
        <div class="contenido-home">
            <div  class="banner">
                <img id="banner" src="/storage/banner.jpg" alt="banner de la pagina principal">

                <h2 id="bienvenido">BIENVENIDOS A MI BLOG DE VIAJERO</h2>
                <br><br>
            </div>

            <div class="principal-home">

                @foreach ($posteos as $post)
                    <div class="posteo">
                            <a href="/pelotudo">
                                <img src="/storage/{{$post->img}}" alt="">
                                <p> Publicado {{$post->created_at}} • {{$post->categoria}}</p>    
                                <h3>{{$post->titulo}}</h3>
                                <br>  
                                <h6>Leer mas   <ion-icon name="arrow-round-forward"></ion-icon>   </h6>
                                </a>
                                <hr>
                    </div>
              @endforeach

              
          
            </div>
        </div>
@endsection
