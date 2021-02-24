@extends('layouts.main')

@section('content')
    
<div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="name">
                  
                </div>
                <div class="col-12">
                    
                    <table class="table">
                        
                        <thead>
                          <tr>
                            <th>ID de usuario</th>
                            <th>Codigo</th>
                            <th>Nuevo rol</th>
                            <th>Acción</th>
                          </tr>
                        </thead>
                        
                          <tbody>
                              <form action="{{ route('roles.update', $user->id) }}" method="POST">
                                @method('PATCH') 
                                @csrf

                                <tr> 
                                  <td>{{$user->id}}</td>  
                                  <td>{{$user->codigo}}</td>
                                  <td>
                                      <select name="rol" id="rol" class="form-control">
                                        <option value="">Selecciona un rol...</option>
                                        @foreach ($roles as $role)
                                            <option value="{{ $role->id }}">{{ $role->name }}</option>
                                        @endforeach
                                      </select>
                                  </td>
                                  <td><button type="submit" class="btn">Guardar</button></td>
                                </tr> 
                              </form>
                          </tbody>                
                      </table>

                </div>
            </div>
        </div>
    </div>

@endsection