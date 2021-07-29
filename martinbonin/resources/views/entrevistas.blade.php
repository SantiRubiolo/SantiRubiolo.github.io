@extends('plantilla')

@section('contenido')

<div class="container bg-secondary mb-4">
    <div class="row">
        <div class="col">
            <h1 class="titulo-bloque">Entrevistas</h1>
        </div>
    </div>
    
    <div class="row justify-content-center">
        <div class="col col-lg-6 p-2">
            <a href="">
                <div class="card text-white caja-entrevista">
                    <img class="card-img" src="img/lagunas.jpg">
                    <div class="card-img-overlay">
                    <h2>Lagunas</h2>
                    </div>
                </div>
            </a>
        </div>
        <div class="col col-lg-6 p-2">
            <a href="">
                <div class="card text-white caja-entrevista">
                    <img class="card-img" src="img/losmonos.jpg">
                    <div class="card-img-overlay">
                    <h2>Los Monos</h2>            
                    </div>
                </div>
            </a>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col col-lg-6 p-2">
            <a href="">
                <div class="card text-white caja-entrevista">
                    <img class="card-img" src="img/rr.jpg">
                    <div class="card-img-overlay">
                      <h2>Rouge and Roll</h2>
                    </div>
                </div>
            </a>
        </div>
        <div class="col col-lg-6 p-2">
            <a href="">
                <div class="card text-white caja-entrevista">
                    <img class="card-img" src="img/castillo.jpg">
                    <div class="card-img-overlay">
                      <h2>El Castillo del Blues</h2>
                    </div>
                </div>
            </a>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col col-lg-6 p-2">
            <a href="">
                <div class="card text-white caja-entrevista">
                    <img class="card-img" src="img/sentado.jpg">
                    <div class="card-img-overlay">
                      <h2>Sentado en la Cama</h2>
                    </div>
                </div>
            </a>
        </div>
    </div>
</div>

@endsection