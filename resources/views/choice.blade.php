@extends('layout')

@section('content')
    
<div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="name">
                  
                </div>
                <div class="col-12">
                    
                    <p>Estas son sus materias y la academia a la que pertenece:</p><br>
                    
                    <table class="table">
                        
                        <thead>
                          <tr>
                            <th>Materia</th>
                            <th>Academia</th>
                          </tr>
                        </thead>
                        
                        @foreach ($materias as $materia)
                        <tbody>
                          <tr>
                            <td>{{$materia->nombre}}</td>
                            <td>
                            
                                @if (is_null($materia->academia['nombre']))


                                <form action="{{ route('academias.update', $materia->crn) }}" method="post">
                                  {{--<form action="{{ route('academias.store') }}" method="post">--}}
                                  @method('PATCH')
                                  @csrf

                                  <input type="text" name="clave" id="clave" value="{{$materia->clave}}" hidden>
                                  <input type="text" name="nombre" id="nombre" value="{{$materia->nombre}}" hidden>
                                  <input type="text" name="carreras_id" id="carreras_id" value="{{$materia->carreras_id}}" hidden>
                                  <select class="form-control" name='academias_id' id='academias_id'>
                                
                                    <option value="">Seleccione la academia</option>

                                            @foreach ($academias as $academia)

                                        <option value="{{$academia->id}}">
                                        
                                            {{$academia->nombre}}
                        
                                        </option>
                                        @endforeach
                                </select>

                                <br>
                                <input class="btn btn-primary" type="submit" value="ok">
                                
                              </form>  
                            @else
                                {{$materia->academia['nombre']}}
                            @endif
                            
                            </td>
                          </tr>
                        </tbody>
                        @endforeach
                      </table>

                      

                </div>
            </div>
        </div>
    </div>


@endsection