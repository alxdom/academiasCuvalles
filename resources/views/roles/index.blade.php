@extends('layouts.main')

@section('content')
<div class="col-md-12">
    <div class="card">
        <div class="card-body">
                  <div class="col-12">
                      <h3>Roles</h3>
                      <hr>

                        <div class="row my-5">

                        </div>
                        
                        <div class="table-responsive">
                            <table class="table my-5">
                                <thead class="bg-light">
                                  <tr>
                                    <th>ID de usuario</th>
                                    <th>Crn</th>
                                    <th>Rol</th>
                                    <th>Acciones</th>
                                  </tr>
                                </thead>
                                <tbody>
                                    
                                @foreach ($users as $user)
                                    <tr>
                                        <td>{{$user->id}}</td>
                                        <td>{{$user->codigo}}</td>
                                        <td>{{ implode( ", ",$user->getRoleNames()->toArray())}}</td>
                                        <td><a href="{{ route('roles.edit', [$user->id]) }}" type="button" class="btn btn-primary">Cambiar rol</a></td>
                                    </tr>
                                @endforeach
                                    
                                </tbody>
                              </table>
                        </div>
                        
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