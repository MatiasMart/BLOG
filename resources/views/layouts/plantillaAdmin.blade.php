<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}" />
    <title>Administrador</title>
</head>
<body>

    <div class="container-fluid">

      <div class="row content">

        <div class="col-sm-3 sidenav">

          <h4 >Panel de Adminsitrador</h4>

          <ul class="nav nav-pills nav-stacked">
            <li class="active"><a href="/admin">Home</a></li>
            <li><a href="/admin/post">Post</a></li>
            <li><a href="/admin/usuarios">Usuarios</a></li>
          </ul><br>

          <div class="input-group">

            <input type="text" class="form-control" placeholder="Search Blog..">
            
            <span class="input-group-btn">
              <button class="btn btn-default" type="button">
                <span class="glyphicon glyphicon-search"></span>
              </button>
            </span>
          </div>

        </div>

        <div class="col-sm-9">

        @yield('contenido')

        </div>
      </div>
    </div>
    
    <footer class="container-fluid">
      <p>Footer Text</p>
    </footer>
    
    </body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</html>