@extends('layouts.main')

@section('content')
    
<div class="col-md-12">
    <div class="card">
        <div class="card-body">
                  <div class="col-12">
                      <h3>Bienvenidos a las Academias de Cuvalles</h3>
                      <hr>
                        <h5 class="text-center my-5"><small> Estas son sus materias y la academia a la que pertenece:</small></h5>
                        <table class="table ">
                            <thead class="bg-light">
                              <tr>
                                <th>NRC</th>
                                <th>Código</th>
                                <th>Clave</th>
                                <th>Materia</th>
                                <th>Academia</th>
                                <th>Acciones</th>
                              </tr>
                            </thead>
                            <tbody>
                              @foreach ($materias as $materia)
                              <tr>
                                  <td><small>{{$materia->nrc}}</small></td> 
                                  <td><small>{{$materia->codigo}}</small></td>
                                  <td><small>{{$materia->clave}}</small></td>
                                  <td><small>{{$materia->materia}}</small></td>

                                  @foreach ($MATERIAS as $MATERIA)
                                      @if ($MATERIA->crn == $materia->nrc)
                                        @if ($MATERIA->academias_id == null)
                                          <td class="text-danger"><small>Sin academia...</small></td>
                                        @else
                                          <td><small>{{$MATERIA->academia->nombre}}</small></td>
                                        @endif
                                        <td><small><a href="{{ route('academiasAssign.edit', $MATERIA->crn )}}" type="button" class="btn btn-primary btn-sm">Asignar academia</a></small></td>
                                      @endif
                                  @endforeach
                                  
                                  {{-- <td><small><button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleModal">Asignar academia</button></small></td> --}}
                              </tr>
                              @endforeach
                            </tbody>
                          </table>
                  </div>
         </div>
    </div>
</div>
@include('partials.modalAcademia')
@endsection