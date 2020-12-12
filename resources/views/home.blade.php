@extends('layouts.main')
@section('content')




<div class="col-md-12">

    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body mx-auto bg-udg">
                    <h1 class="letra-titulo-3 title-cuv p-2 rounded">Bienvenidos a las Academias de Cuvalles</h1>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-8">
            <div class="card">
                <div class="card-body align-self-center text-center">
                    <p><b>NOTA Importante: </b></p>
                    
                    <p>¡Ya puedes subir los planes y guías del ciclo 2020A!</p>
                    <br>
                    <br>
                    <br>
                    
                    <p class="text-muted">Si alguna materia no te aparece en el ciclo buscado, manda un correo 
                        a francisco.oliva@profesores.valles.udg.mx para poder dar de alta las 
                        materias faltantes.</p>
                </div>
            </div>
        </div>

        <div <div class="col-sm-4">
            <div class="card">
                <div class="card-body">
                    <h4 class="align-self-center text-center">
                        <b> 
                            <div class="animate__animated animate__headShake animate__infinite align-self-center text-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="#8b2323" class="bi bi-exclamation-circle-fill" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 4a.905.905 0 0 0-.9.995l.35 3.507a.552.552 0 0 0 1.1 0l.35-3.507A.905.905 0 0 0 8 4zm.002 6a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
                                </svg>
                            </div>
                            Revisa ya tus materias
                    <h4> 
                    <a class="btn btn-primary" href="#">Go</a>
                </div>
            </div>
        </div>

    </div>
</div>


<style>
.bg-udg{
    background-image: url('https://mdl.cuvalles.udg.mx/pluginfile.php/1/theme_fordson/slide1image/1605724155/banner1.jpg');
    background-size: cover;
    background-repeat: no-repeat;
    height: 15rem;
    opacity: 0.8;
    font-weight: 900;
}
.title-cuv{
    opacity: 1;
    z-index: 111111;
    background-color:#1864ab;
    color: white;
}



</style>
@endsection







