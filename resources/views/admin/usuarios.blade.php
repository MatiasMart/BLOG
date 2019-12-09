@extends('layouts.plantillaAdmin')

@section('contenido')
    
<div class="contenedor col-sm-12 col-md-12 col-lg-12">
    <div class="col-sm-12 col-md-12 col-lg-6 caja_izquierda">

            <table class="table border">
                    
                    <tr>
                        <th scope="col border">Id</th>
                        <th scope="col border">Nombre</th>
                        <th scope="col border">Apellido</th>
                        <th scope="col border">Email</th>
                        <th scope="col border"></th>
                    </tr>
                    @forelse ($usuarios as $usuario)
                        <tr>
                            <td scope="col border">{{$usuario->id}}</td>   
                            <td scope="col border">{{$usuario->name}}</td>
                            <td scope="col border">{{$usuario->surname}}</td>
                            <td scope="col border">{{$usuario->email}}</td>
                            {{-- <td scope="col border"><img src="/storage/{{ $cliente->img}}" alt="img producto" width="40"></td> --}}
                            <td scope="col border">
                            <a class="btn btn-danger" href="/usuarios/eliminar/{{$usuario->id}}"> Eliminar</a></td>
                        </tr>
                    @empty 
                    <em> La lista esta vacia  </em>    
                    @endforelse 
                       
            </table>         
    </div>
</div>
@endsection