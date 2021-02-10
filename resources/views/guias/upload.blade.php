@extends('layouts.main')

@section('content')
      <div class="col-md-9 mx-auto">
        <div class="card">
            <div class="card-body">
               
                  
                    <form method="POST" action="{{route('upload')}}" accept-charset="UTF-8" enctype="multipart/form-data">
                      {{ csrf_field() }}

                        <div class="form-row m-3 p-3">
                          <div class="col">
                            <label for="categoria">Categoria</label>
                            <input class="form-control" type="text" name="categoria" id="categoria" value="Guias" readonly>
                          </div>

                          <div class="col">
                            <label for="academia">Academia</label>
                            <input class="form-control" type="text" name="academia" id="academia" value="{{$idacademia}}" readonly>
                          </div>
  
                          <div class="col">
                            <label for="materia">Materia</label>
                            <input class="form-control" type="text" name="materia" id="materia" value="{{$idmateria}}" readonly> 
                          </div>
  
                          <div class="col">
                            <label for="tipo">Tipo</label>
                            <input class="form-control" type="text" name="tipo" id="tipo" value="{{$tipo}}" readonly>
                          </div>
                        </div>

                      <hr>


                      <div class="form-row p-3 m-3">
                        <div class="form-group col-12 mx-auto">
                          <label for="ciclo">Ciclo</label>
                          <select class="form-control" name="ciclo" id="ciclo" required>
                            <option value="">Seleccionar ciclo</option>
                            <option value="2020A">2020A</option>
                            <option value="2020B">2020B</option>
                            <option value="2021A">2021A</option>
                            <option value="2021B">2021B</option>
                          </select>
                        </div>

                        <div class="form-group col-8 mx-auto my-2">
                          
                              <label for="archivo">Archivo</label>
                              <input class="form-control form-control-lg" type="file" name="archivo" required>
                              <input class="btn btn-success my-4 btn-block" type="submit" value="Subir archivo">
                        
                        </div>
                      </div>
                     
                    </form>
               
            </div>
        </div>
    </div>
    @endsection




