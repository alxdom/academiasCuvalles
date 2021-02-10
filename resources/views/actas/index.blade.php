@extends('layouts.main')

@section('content')
<div class="col-md-12">
    <div class="card">
        <div class="card-body">
                  <div class="col-12">
                      <h3>Cargar mis actas</h3>
                      <hr>

                        <div class="row my-5">

                                <div class="col-md-2">
                                    <span>Filtrar por: </span>
                                </div>

                                <div class="col-md-4">
                                        
                                            <select name="buscarpor" id="buscarpor" class="form-control">
                                                <option value="0">Selecciona una academia...</option>
                                                @foreach ($academias as $academia)
                                                    <option value="{{$academia->id}}">{{$academia->nombre}}</option>
                                                @endforeach
                                            </select>
                                </div>

                                {{-- <div class="col-md-4">
                                    <label for="">Ciclo </label>
                                    <select name="" id="" class="form-control">
                                        <option value="0">Selecciona un ciclo...</option>
                                    </select>
                                </div> --}}

                                
                                <div class="col-md-2">
                                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
                                </div>

                        </div>
                        
                        <div class="table-responsive">
                            <table class="table my-5">
                                <thead class="bg-light">
                                  <tr>
                                    <th>Academia</th>
                                    <th>NRC</th>
                                    <th>Código</th>
                                    <th>Materia</th>
                                    <th>Actas</th>
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
                                                    <td>
    
                                                        {{-- <a href="{{route('evidencias.show', $tipo = 'asistencias', $materia = $materia->nrc, $academia = $dbmateria->academias_id)}}"> --}}
                                                        <a href="{{route('actas.show', ['idmateria' => $materia->nrc, 'tipo' => 'Actas', 'idacademia' => $dbmateria->academia->nombre])}}">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-cloud-upload-fill" viewBox="0 0 16 16">
                                                            <path fill-rule="evenodd" d="M8 0a5.53 5.53 0 0 0-3.594 1.342c-.766.66-1.321 1.52-1.464 2.383C1.266 4.095 0 5.555 0 7.318 0 9.366 1.708 11 3.781 11H7.5V5.707L5.354 7.854a.5.5 0 1 1-.708-.708l3-3a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 5.707V11h4.188C14.502 11 16 9.57 16 7.773c0-1.636-1.242-2.969-2.834-3.194C12.923 1.999 10.69 0 8 0zm-.5 14.5V11h1v3.5a.5.5 0 0 1-1 0z"/>
                                                            </svg>
                                                        </a>
    
                                                    </td>
    
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
         
         <div class="card-footer text-muted">
            {{-- <ul class="text-muted list-inline">
                <hr>
                <li class="list-inline-item"><small>Nomenclaturas:</small></li>
                <li class="list-inline-item"><small>*As: Asistencias</small></li>
                <li class="list-inline-item"><small>*Ca: Calificaciones</small></li>
                <li class="list-inline-item"><small>*Ex: Exámenes</small></li>
                <li class="list-inline-item"><small>*Ta: Tareas</small></li>
                <li class="list-inline-item"><small>*Au: Autoevaluaciones</small></li>
                <li class="list-inline-item"><small>*Si: Siiau</small></li>
            </ul> --}}
          </div>
    </div>
</div>


@include('partials.modals.upload-evidencias.upload')
<style>
    #lista-nome li{
        display:inline;
        padding-left:20px;
        padding-right:20px;
    }
</style>
@endsection