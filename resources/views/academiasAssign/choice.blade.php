@extends('layouts.main')

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
                            <th>Crn</th>
                            <th>Materia</th>
                            <th>Academia</th>
                            <th>-</th>
                          </tr>
                        </thead>
                        
                        @foreach ($materias as $materia)
                        <tbody>
                          <tr>
                            <td>{{$materia->crn}}</td>
                            <td>{{$materia->nombre}}</td>
                            <td>
                              @if (is_null($materia->academias_id))
                
                               <span style="color: red">Esta materia no tiene una academia asignada.</span>
                               <td>
                               {{--<a class="btn" href="{{ route('academiasAssign.edit', $materia->crn) }}">Editar</a>--}}

                               <form action="{{ route('academiasAssign.update', $materia->crn) }}" method="POST">
                                @method('PATCH') 
                                @csrf

                                  <input type="text" name="clave" id="clave" value="{{$materia->clave}}" hidden>
                                  <input type="text" name="nombre" id="nombre" value="{{$materia->nombre}}" hidden>
                                  <input type="text" name="carreras_id" id="carreras_id" value="{{$materia->carreras_id}}" hidden>
                                  <select class="form-control col-md-12" name='academias_id' id='academias_id'>
                                
                                    <option value="">Seleccione la academia</option>

                                            @foreach ($academias as $academia)

                                              <option value="{{$academia->id}}">
                                        
                                                {{$academia->nombre}}
                        
                                        </option>
                                        @endforeach
                                </select>
                                <button type="submit" class="btn col-md-12">ok</button>
                                </form>
                               </td>

                            @else
                                {{$materia->academia['nombre']}} 
                                <td></td>
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