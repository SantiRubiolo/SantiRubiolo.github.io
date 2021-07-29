<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Martín Bonín</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link href="{{ asset('css/estilos.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600&display=swap" rel="stylesheet">
</head>
<body>
  
    <nav class="navbar navbar-expand-lg sticky-top" id="menu">
      <div class="container-fluid">
        <a class="navbar-brand text-white" href="#">Martín Bonín</a>
          <button class="navbar-toggler btn-menu" id="btnNav" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
              <span class="fa fa-bars"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ml-auto">     
                <a class="nav-link" href="{{ route("inicio") }}" onclick="cerrarMenu()">Inicio</a>
                <a class="nav-link" href="{{ route("sobremi") }}" onclick="cerrarMenu()">Sobre mí</a>
                <a class="nav-link" href="{{ route("entrevistas") }}" onclick="cerrarMenu()">Entrevistas</a>
                <a class="nav-link" href="{{ route("radio") }}" onclick="cerrarMenu()">Radio</a>
                <a class="nav-link" href="{{ route("proyectos") }}" onclick="cerrarMenu()">Proyectos</a>
                <a class="nav-link" href="{{ route("contacto") }}" onclick="cerrarMenu()">Contacto</a>
            </div>
          </div>
        </div>
      </div>
    </nav>

    <section>
        <div>
          @yield('contenido')
        </div>   
    </section>
  
    <footer>
      <div class="container-fluid">
        <div class="row pb-2 pt-5">
          <div class="col">
            <a class="icono-redes" href="https://www.facebook.com/martin.bonin.18" target="_blank">
            <img src="img/redes/facebook.png" height="40px" alt="Facebook"></a>
            <a class="icono-redes" href="https://www.instagram.com/martinbonin_/" target="_blank">
            <img src="img/redes/instagram.png" height="40px" alt="Instagram"></a>
            <a class="icono-redes" href="https://www.youtube.com/channel/UCproqo4DmqJNZwM1JiBdasw" target="_blank">
            <img src="img/redes/youtube.png" height="40px" alt="Youtube"></a>
            <a class="icono-redes" href="" target="_blank">
            <img src="img/redes/linkedin.png" height="40px" alt="LinkedIn"></a>
          </div>
        </div>

        <div class="row pb-5 pt-5">
          <div class="col-12 col-sm-6 col-lg-3">
            <h6>Inicio</h6>
            <ul>
              <li><a class="text-decoration-none text-white" href="">Item 1</a></li>
              <li><a class="text-decoration-none text-white" href="">Item 2</a></li>
              <li><a class="text-decoration-none text-white" href="">Item 3</a></li>
            </ul>
          </div>
          
          <div class="col-12 col-sm-6 col-lg-3">
            <h6>Entrevistas</h6>
            <ul>
              <li><a class="text-decoration-none text-white" href="">Item 1</a></li>
              <li><a class="text-decoration-none text-white" href="">Item 2</a></li>
              <li><a class="text-decoration-none text-white" href="">Item 3</a></li>
            </ul>
          </div>

          <div class="col-12 col-sm-6 col-lg-3">
            <h6>Radio</h6>
            <ul>
              <li><a class="text-decoration-none text-white" href="">Item 1</a></li>
              <li><a class="text-decoration-none text-white" href="">Item 2</a></li>
              <li><a class="text-decoration-none text-white" href="">Item 3</a></li>
            </ul>
          </div>
          
          <div class="col-12 col-sm-6 col-lg-3">
            <h6>Proyectos</h6>
            <ul>
              <li><a class="text-decoration-none text-white" href="">Item 1</a></li>
              <li><a class="text-decoration-none text-white" href="">Item 2</a></li>
              <li><a class="text-decoration-none text-white" href="">Item 3</a></li>
            </ul>
          </div> 
        </div>

        <div class="row small justify-content-center pb-2 pt-4">
          <div class="col-12 col-md-6">
              Desarrollado por <a class="text-white" href="https://www.linkedin.com/in/santiago-rubiolo/" target="_blank">Santiago Rubiolo</a>
          </div>
          <div class="col-8 col-md-6">
              Copyright Martín Bonín - 2021. Todos los derechos reservados.
          </div>                   
        </div>
      </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>   
    <script type="text/javascript" src="{{ asset('js/main.js') }}"></script>
    
  </body>
</html>