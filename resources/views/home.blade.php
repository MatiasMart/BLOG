@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card " id="card-Delogin">
                <div class="card-header">Usuario</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <img id="imagen-usuario" src="/storage/{{Auth::user()->img}}" alt="">
                    <h3>Bienvenido {{ Auth::user()->name}} </h3>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
