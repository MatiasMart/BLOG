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

                <div id="ladoD">
                                <header>
                                    <h1>Ultimos Blogs!</h1>
                                    {{$posteos->links()}}
                                </header>
                                <div class="band">
                                    <div class="item-1">
                                    <a  href="/detalle/1" class="card-home">
                                        <div class="thumb" style=""> <img src="https://www.cafeprensa.com.ar/gestor/wp-content/uploads/2019/03/viajes-780x405.jpg" alt=""></div>
                                        <article>
                                        <h1>Quien Soy?</h1>
                                        <span>Leer mas!</span>
                                        </article>
                                    </a>
                                    </div>

                        @foreach ($posteos as $post)
                
                            <div class="posteo">
                                <div class="item-2">
                                    <a href="/post/{{$post->id}}" class="card-home">
                                    <div class="thumb" style=""> <img src="/storage/{{$post->img}}" alt=""></div>
                                    <article>
                                        <h6>{{$post->created_at->toFormattedDateString()}}</h6>
                                        <h1>{{$post->titulo}}</h1>
                                        <span>Leer mas</span>
                                    </article>
                                    </a>
                                </div>
                            </div>

                        @endforeach 
                        </div>
                </div>

                <div id="ladoI">
                    <h4>Sobre mi</h4>

                    <img src="/storage/demi.png" alt="imagen de mi ">

                    <h3>Matias Martinelli</h3>

                    <p>Soy un estudiante de Programacion que disfruta viajar y conocer nuevos lugares</p>

                    <h4>Mis Redes</h4>

                    <div class="redes">
                            <div>
                                    <a href="https://es-la.facebook.com/"><ion-icon name="logo-facebook"></ion-icon></a>
                                    <a href="https://twitter.com/MatiMartinelli4"><ion-icon name="logo-twitter"></ion-icon></a>
                                    <a href=""><ion-icon name="logo-instagram"></ion-icon></a>
                            </div>
                            <div>
                                    <a href=""><ion-icon name="logo-skype"></ion-icon></a>
                                    <a href=""><ion-icon name="logo-linkedin"></ion-icon></a>
                                    <a href=""><ion-icon name="logo-youtube"></ion-icon></a>
                            </div>
                    </div>

                    <h4>Categorias</h4>

                    @foreach ($categorias as $categoria)
                    <a href="/categoria/{{$categoria->id}}"><h6>{{$categoria->categoria}}</h6></a>
                    
                        
                    @endforeach
                    
                    
                </div>

            </div>
        </div>
@endsection
