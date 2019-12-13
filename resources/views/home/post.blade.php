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

        <div class=" este ">
                <div class="col-md-12 col-md-12 col-sm-12">
                    <div class="comment-wrapper">
                        <div class="panel panel-info">
                            <div class="panel-heading">
                                Comentarios
                            </div>
                            <div class="panel-body">
                                <form action="/agregarComentario" method="POST">
                                @csrf
                                <input type="hidden" name="id" value="{{$post->id}}">
                                <textarea name="comentario" id="comentario" class="form-control" placeholder="write a comment..." rows="3"></textarea>
                                <br>
                                    <button type="submit" class="btn btn-info pull-right">Publicar</button>
                                </form>
                                <div class="clearfix"></div>
                                <hr>
                                <ul class="media-list">
                                         
                                            <li class="media">
                                                <a href="#" class="pull-left">
                                                    <img src="https://bootdey.com/img/Content/user_1.jpg" alt="" class="img-circle">
                                                </a>
                                                <div class="media-body">
                                                    <span class="text-muted pull-right">
                                                        <small class="text-muted">30 min ago</small>
                                                    </span>
                                                    <strong class="text-success">@MartinoMont</strong>
                                                    <p class="p-comentarios">
                                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                        Lorem ipsum dolor sit amet, <a href="#">#consecteturadipiscing </a>.
                                                    </p>
                                          
                                        </div>  
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
            
                </div>
            </div>
        </div>
@endsection