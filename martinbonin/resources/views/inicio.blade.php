@extends('plantilla')

@section('contenido')

    <section class="caja-imagen"></section>

    <section class="contenido-inicio">
        <div class="container py-3">
            <div class="row text-white justify-content-center align-items-center">
                <div class="col-12 col-sm-6 col-md-4 py-2">
                    <div class="card caja-inicio">
                        <div class="card-header">ENTREVISTAS</div>
                        <div class="card-body">
                          <h5 class="card-title">Entrevistas inéditas a artistas únicos. La Columna del Rock de Córdoba.</h5>
                          <a class="btn btn-outline-warning" href="{{ route("entrevistas") }}">Conocer más</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4 py-2">
                    <div class="card caja-inicio">
                        <div class="card-header">RADIO</div>
                        <div class="card-body">
                          <h5 class="card-title">Participación en producciones radiales. Centro Cultural España Córdoba, Sucesos.</h5>
                          <a class="btn btn-outline-warning" href="{{ route("radio") }}">Conocer más</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 py-2">
                    <div class="card caja-inicio">
                        <div class="card-header">PROYECTOS</div>
                        <div class="card-body">
                          <h5 class="card-title">Proyectos individuales y colectivos. Héroe de Culto, Cosquín Rock.</h5>
                          <a class="btn btn-outline-warning" href="{{ route("proyectos") }}">Conocer más</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container py-3">
            <div class="row">
                <div class="col">
                    <h1 class="titulo-bloque">Notas Destacadas</h1>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-4 py-2">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/s_ZKd_zGL3w" allowfullscreen></iframe>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 py-2">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/nxzqb8Ivg1g" allowfullscreen></iframe>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 py-2">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/vaX1fG2MHmE" allowfullscreen></iframe>
                    </div>
                </div>             
            </div>
        </div>
        <div class="container py-5">
            <div class="row">
                <div class="col">
                    <h1 class="titulo-bloque">Información</h1>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam odit inventore, rem adipisci reiciendis itaque nulla cum iste minus fugit illo quasi non quisquam tempora voluptates optio similique, dolores qui alias. Recusandae, voluptatem. Quod accusantium eligendi corporis aperiam animi harum odio numquam blanditiis! Consectetur enim doloribus sit dignissimos illo! Consequuntur, tempora animi cupiditate provident minima numquam neque nihil, qui nemo aliquam dignissimos molestiae iure voluptates nisi veritatis voluptatem beatae, sint explicabo harum dolore ducimus in saepe impedit? Est commodi quos distinctio tenetur provident, doloremque ipsum consectetur nisi sequi, voluptate architecto harum. Recusandae, unde illo, eligendi magnam ab voluptatum iure ullam sit cumque ut, ipsum sequi consectetur amet pariatur numquam voluptatem cum impedit aperiam eum hic eaque ea nisi corrupti. Labore porro reprehenderit eius fugiat, facilis cumque dolorem explicabo odit ex, repellendus numquam ipsum animi dicta, harum omnis illo. Architecto quidem eligendi dicta eveniet voluptates possimus officiis itaque consequatur corrupti odio?
                </div>
            </div>
        </div>
    </section>

    <section class="inicio-imagen"></section>

@endsection