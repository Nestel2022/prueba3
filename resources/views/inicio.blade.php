<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/all.min.css')}}" rel="stylesheet">
    <title>Inicio</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid">         
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
              <a class="nav-link active" aria-current="page" href="/">Inicio</a>
              <a class="nav-link" href="/propietarios">Propietarios</a>             
            </div>
          </div>
        </div>
      </nav>

    <div class="container-fluid">
        @yield('contenido')    
    </div>

    
    
</body>
<script type="text/javascript" src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
</html>