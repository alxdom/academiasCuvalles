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
                            <th>Materia</th>
                            <th>Academia</th>
                          </tr>
                        </thead>
                        
                        @foreach ($materias as $materia)
                        <tbody>
                          <tr>
                            <td>{{$materia->nombre}}</td>
                            <td>
                              @if (is_null($materia->academias_id))
                               <span style="color: red">Esta materia no tiene una academia asignada.</span>
                               <a class="btn" href="{{ route('academias.edit', $materia) }}">Seleccionar academia</a>
                               
                                
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