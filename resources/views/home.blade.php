@extends('layouts.main')
@section('content')
<div class="col-md-12">
    
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="https://mdl.cuvalles.udg.mx/pluginfile.php/1/theme_fordson/slide1image/1605724155/banner1.jpg" alt="Portada del sitio web">
              </div>
        </div>
      </div>


    <div class="row caja">
    
    <div class="row  ">
        <div class="card-deck col-12 ">
            <div class="card fondo-card">
                <div class="card-header  p-3">
                    <h5 class="card-title">
                        <span style="color: #1864ab;">
                            <i class="fas fa-cloud-upload-alt"></i>
                          </span>
                          Carga disponible
                    </h5>
                </div>
              <div class="card-body">
                <p class="card-text text-muted">Si alguna materia o academia no te aparece contacta a un administrador.</p>
              </div>
            </div>

            <div class="card fondo-card">
                <div class="card-header  p-3">
                    <h5 class="card-title">
                        <span style="color: #1864ab;">
                            <i class="fas fa-user-tag"></i>
                          </span>
                          Tipo de usuario
                    </h5>
                </div>
              <div class="card-body">
                <p class="card-text text-muted">
                    @if(@Auth::user()->hasRole('Academico'))
                        Academico
                    @elseif(@Auth::user()->hasRole('Presidente de academia'))
                        Presidente de Academia
                    @else
                        SuperAdmin
                    @endif
                </p>
              </div>
            </div>

            <div class="card fondo-card">
                <div class="card-header  p-3 white">
                    <h5 class="card-title">
                        <span style="color: #1864ab;">
                            <i class="fas fa-user"></i>
                          </span>
                          Código de usuario
                    </h5>
                </div>
              <div class="card-body">
                <p class="card-text text-muted">{{Auth::user()->codigo}}</p>
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
.fondo{
    
    border-top: solid 3px #1864AB;
   
}
.fondo-card{
    color: #FFFFFF !important;
    border-bottom: solid 5px #1864AB;
}
.caja{
    
    position: relative;
    top: -58px;
    justify-content:center;
    text-align: center;
}
html {
   font-size: 1rem;
}
h1 {
  font-size: 1.2rem;
}
h2 {
  font-size: 1.1rem;
}
h5{
    font-size: 1rem; 
}
p{
    font-size: 0.8rem;
}

@media (min-width: 768px) {
  html {
    font-size: 1.1rem;
  }
  h1 {
      font-size: 1.3rem;
  }
  h2 {
      font-size: 1.2rem;
  }
}

@media (min-width: 991px) {
    html {
    font-size: 1.2rem;
  }
  h1 {
      font-size: 1.5rem;
  }
  h2 {
      font-size: 1.4rem;
  }
}

@media (min-width: 1200px) {
  html {
    font-size: 1.2rem;
  }
  h1 {
      font-size: 2.5rem;
  }
  h2 {
      font-size: 1.6rem;
  }

</style>
@endsection







