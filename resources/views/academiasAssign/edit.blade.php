@extends('layouts.main')

@section('content')
    
<div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="name">
                  
                </div>
                <div class="col-12">
                    
                    <p>Seleccione una academia:</p><br>
                    
                    <table class="table">
                        
                        <thead>
                          <tr>
                            <th>CRN</th>
                            <th>Clave</th>
                            <th>Materia</th>
                            <th>Id Carrera</th>
                            <th>Id Academia</th>
                            <th>save</th>
                          </tr>
                        </thead>
                        
                     
                          <tbody>
                            <form action="{{ route('academiasAssign.update', $materias->crn) }}" method="POST">
                              @method('PATCH') 
                              @csrf
                          <tr> 
                            <td>
                              {{$materias->crn}}
                          </td>  

                          <td>
                            <input type="text" name="clave" id="clave" value="{{$materias->clave}}">
                                
                            </td>  

                            <td>
                              <input type="text" name="nombre" id="nombre" value="{{$materias->nombre}}">
                              
                            </td>
                            
                             <td>
                              
                              <input type="text" name="carreras_id" id="carreras_id" value="{{$materias->carreras_id}}">
                            </td>

                            <td>
                              
                                <input type="text" name="academias_id" id="academias_id" value="{{$materias->academias_id}}">
                            </td>
                            <td>
                                <button type="submit" class="btn">Save</button>
                            </td>
                              

                            </form>

                          </tr> 
                        </tbody>
                                             
                      </table>
                        {{--<select name="academia_id" id="academia_id">

                                    <option value="">Selecciona una academia</option>

                                    @foreach ($academias as $academia)
                                      <option value="1">{{$academia->nombre}}</option>
                                    @endforeach
                                    
                                  </select>--}}
                </div>
            </div>
        </div>
    </div>

@endsection