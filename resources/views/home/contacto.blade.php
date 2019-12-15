@extends('layouts.app')

@section('titulo')   
Pagina de Contacto
@endsection




@section('content')
    <div class="flex">
        <div class="container">
            <form action="../funciones/mail.php" method="POST">

                    <h3>Ecribinos</h3>

                    <label for="nombre">Nombre</label>
                    <input type="text" id="nombre" name="nombre" required placeholder="Nombre..">

                    <label for="apellido">Apellido</label>
                    <input type="text" id="apellido" name="apellido" required placeholder="Apellido..">

                    <label for="email">Email</label>
                    <br>
                    <input type="email" id="email" name="email" required placeholder="Email..">
                    <br>

                    <label for="motivo">Motivo</label>
                    <textarea id="motivo" name="motivo" placeholder="Escribenos algo.." style="height:200px"></textarea>

                    <button type="submit" name="submit">Enviar</button>
                    <input type="reset" value="Borrar">
            </form>
        </div>

        <div class="direccion">
            <h4>Venta al Publico</h4>
            <p> <span>Email:</span> <a href="mailto:ventas@ventas.com">ventas@ventas.com</a></p>
            <span>Tel:</span><a href="tel:+543411554365">+54 341-1554365</a>

            <h4 class="alejar">Venta al Pormayor</h4>
            <p> <span>Email:</span> <a href="ventaspormayor@ventas.com">ventaspormayor@ventas.com</a></p>
            <span>Tel:</span><a href="tel:+543411554365">+54 341-1554365</a>

            <h4 class="alejar">Ubicacion</h4>
            <p> <span>Direccion:</span> Córdoba 2035, S2000AXG Rosario, <br> Santa Fe</p>
            <span>Tel:</span><a href="tel:+543411554365">+54 341-1554365</a>
        </div>
    </div>

    <div class="mapa">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3348.2604253531076!2d-60.65339048510845!3d-32.94413307909046!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95b7abf3b0d57a0d%3A0x1699ceda514e7c6c!2sDigital%20House%20-%20Rosario!5e0!3m2!1ses!2sar!4v1568393086098!5m2!1ses!2sar" width="100%" height="300vh" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
    </div>


@endsection