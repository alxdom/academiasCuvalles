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
            Información de usuario
          </h5>
        </div>
        <div class="card-body">
          <p class="card-text text-muted">
            {{Auth::user()->codigo}} <br>
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


      {{-- <div class="card fondo-card col-sm-12">
        <div class="card-header  p-3 white">
          <h5 class="card-title">
            <span style="color: #1864ab;">
              <i class="fas fa-user"></i>
            </span>
            Usuarios en línea
          </h5>
        </div>
        <div class="card-body">
          
        </div>
      </div> --}}


    </div>
  </div>

  <div class="row">
    <div class="card-deck col-12 ">

      <div class="card">
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
            <table class="table my-1">
              <thead class="bg-light head-table">
                <tr>
                  <th>Academia</th>
                  <th>NRC</th>
                  <th>Código</th>
                  <th>Materia</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($materias as $materia)
                <tr>
                  @foreach ($dbMaterias as $dbmateria)
                  @if ($dbmateria->crn == $materia->nrc)
                  @if ($dbmateria->academias_id == null)
                  <td><small><span class="text-danger">SIN ACADEMIA</span></small></td>
                  @else
                  <td><small>{{$dbmateria->academia->nombre}}</small></td>
                  <td><small>{{$materia->nrc}}</small></td>
                  <td><small>{{$materia->codigo}}</small></td>
                  <td><small>{{$materia->materia}}</small></td>
                  @endif
                  @endif
                  @endforeach


                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>




    </div>



  </div>
</div>


<style>
  .head-table {
    background-color: #1864ab;
  }

  .banner {

    -webkit-box-shadow: 5px 5px 5px 0px #000000, inset 4px 4px 15px 0px #000000, inset -50px -50px 50px 50px rgba(0, 0, 0, 0.51);
    box-shadow: 5px 5px 5px 0px #000000, inset 4px 4px 15px 0px #000000, inset -50px -50px 50px 50px rgba(0, 0, 0, 0.51);
  }

  .fondo {

    border-top: solid 3px #1864AB;

  }

  .fondo-card {
    color: #868E96 !important;
    border-bottom: solid 5px #527B9B;
  }

  .caja {
    /* position: relative; */
    /* top: -58px; */
    justify-content: center;
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

  h5 {
    font-size: 1rem;
  }

  p {
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