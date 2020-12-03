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
                              </tr>
                            </thead>
                            <tbody>
                              @foreach ($materias as $materia)
                              <tr>
                                  <td><small>{{$materia->nrc}}</small></td> 
                                  <td><small>{{$materia->codigo}}</small></td>
                                  <td><small>{{$materia->clave}}</small></td>
                                  <td><small>{{$materia->materia}}</small></td>
                                  <td><small>Tecnologias</small></td>
                              </tr>
                              @endforeach
                            </tbody>
                          </table>
                  </div>
         </div>
    </div>
</div>
@endsection