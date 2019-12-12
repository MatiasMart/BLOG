@extends('layouts.app')


@section('titulo')   
Categorias
@endsection




@section('content')



<ul class="cards">
  @foreach ($categorias as $categoria)
          <li class="cards__item">
            <div class="card">
              <div class="card__image card__image--fence"></div>
              <div class="card__content">
                  <div class="card__title">{{$categoria->categoria}}</div>
                  <p class="card__text">{{$categoria->descripcion}}</p>
                  <a href="/categoria/{{$categoria->id}}">Ver mas</a>
              </div>
            </div>
          </li>
  @endforeach
  </ul>
@endsection