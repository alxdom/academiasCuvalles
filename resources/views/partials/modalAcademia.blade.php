<form action="" method="post">
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Asignación de academias</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
  
          <div class="modal-body">
            <p class="text-muted">Selecciona la academia a la que pertenece tu materia.</p>
            <select name="" id="" class="form-control">
              <option value="0" selected>Academias disponibles...</option>
              @foreach ($academias as $academia)
                <option value="{{$academia->id}}">{{$academia->nombre}}</option>
              @endforeach                                  
            </select>
          </div>
  
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Salir</button>
            <button type="button" class="btn btn-primary">Guardar cambios</button>
          </div>
        </form>
        </div>
      </div>
    </div>