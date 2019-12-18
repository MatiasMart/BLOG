@extends('layouts.plantillaAdmin')

@section('links')
<script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>

    
@endsection


@section('contenido')

    <h2><small>Ultimos posts</small></h2>
    <hr>

    @foreach ($posts as $post)
        
      <h2>{{$post->titulo}}</h2>
      <h5><span class="glyphicon glyphicon-time"></span> Publicado por Matias Martinelli, {{$post->created_at}}.</h5>
      <h5><span class="label label-primary">
        @if ($post->categoria == 1)
        Otros
        @endif
        @if ($post->categoria == 2)
        Europa
        @endif
        @if ($post->categoria == 3)
        America
        @endif
        @if ($post->categoria == 4)
        Africa
        @endif
        @if ($post->categoria == 5)
        Asia
        @endif
        @if ($post->categoria == 6)
        Oceania
        @endif
      </span></h5><br>
      <a class="admin-m" href="/admin/modificar/{{$post->id}}"><ion-icon name="clipboard"></ion-icon>Modificar</a>
      <a class="admin-e" href="/admin/eliminar/{{$post->id}}"> <ion-icon name="trash"></ion-icon> Eliminar</a>

      <hr>


    @endforeach

  


@endsection