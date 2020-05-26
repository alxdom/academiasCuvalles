@extends('layout')

@section('content')
    
    
    <div class="col-md-7">
      <div class="card">
          <div class="card-body">
            <h5 class="card-title">Subir evidencias</h5>
            <form method="POST" action="{{route('upload')}}" accept-charset="UTF-8" enctype="multipart/form-data">
              {{ csrf_field() }}
              <label for="archivo"><b>Archivo: </b></label><br>
              <input type="file" name="archivo" required>
              <br><br>
              <input class="btn btn-success" type="submit" value="Enviar" >
            </form>
  
          </div>
      </div>
  </div>


@endsection