
  <div class="modal animate__animated animate__fadeInUpBig" id="modal-asistencias" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Subir asistencias</h5>
          <hr>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        
        <div class="modal-body">
          {{-- <p class="text-muted">Selecciona la academia a la que pertenece tu materia.</p> {{route('upload')}}--}}
          <form method="POST" action="#" accept-charset="UTF-8" enctype="multipart/form-data">
            {{ csrf_field() }}
            <label for="archivo"><b>Archivo: </b></label><br>
            <input type="file" name="archivo" required>
            <br><br>
            {{-- <input class="btn btn-success" type="submit" value="Enviar" > --}}
          
        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Salir</button>
          <button type="button" class="btn btn-primary">Guardar cambios</button>
        </div>
      </div>
    </form>
    </div>
  </div>
      
      {{-- <div class="col-md-7">
        <div class="card">
            <div class="card-body">
                <div class="col-12">
                  <h4>Subir Asistencias</h4>
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
    </div> --}}




