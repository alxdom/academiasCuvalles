@extends('layouts.main')
@section('content')
<div class="col-md-12">
  <div class="row">
        <div class="card-deck col-sm-12">

            <div class="card fondo-card col-sm-12">
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
                <a href="" type="button" class="btn btn-primary btn-outline">Comezar a subir mis evidencias</a>
              </div>
        </div>

            <div class="card fondo-card col-sm-12">
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


            <div class="card fondo-card col-sm-12">
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

    <div class="row">
      <div class="card-deck col-12 ">

          <div class="card fondo-card">
              <div class="card-header  p-3">
                  <h5 class="card-title">
                      <span style="color: #1864ab;">
                          <i class="fas fa-cloud-upload-alt"></i>
                        </span>
                        Mis materias
                  </h5>
          </div>

            <div class="card-body">
              <div class="table-responsive">
                <table class="table">
                    <thead class="bg-light">
                      <tr>
                        <th>NRC</th>
                        <th>Código</th>
                        <th>Clave</th>
                        <th>Materia</th>
                        <th>Acciones</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>asdasd</td>
                        <td>asdasd</td>
                        <td>asdsad</td>
                        <td>asdasd</td>
                        <td>asdasd</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
            </div>
      </div>

         


      </div>
  </div>
</div>


<style>

.banner{
 
  -webkit-box-shadow: 5px 5px 5px 0px #000000, inset 4px 4px 15px 0px #000000, inset -50px -50px 50px 50px rgba(0,0,0,0.51); 
box-shadow: 5px 5px 5px 0px #000000, inset 4px 4px 15px 0px #000000, inset -50px -50px 50px 50px rgba(0,0,0,0.51);
}

.fondo{
    
    border-top: solid 3px #1864AB;
   
}
.fondo-card{
    color: #FFFFFF !important;
    border-bottom: solid 5px #527B9B;
}
.caja{
    /* position: relative; */
    /* top: -58px; */
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







