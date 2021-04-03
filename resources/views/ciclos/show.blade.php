@extends('layouts.main')

@section('content')

  <div class="content">
    <div class="container-fluid">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-body">
                <div class="col-12">
                  <h3>{{__('Academias')}}</h3>
                  <hr>
                  <div class="table-responsive">
                    <div class="col-12 text-right">
                      <a href="{{route('ciclos.create')}}"
                         class="btn btn-sm btn-primary">{{__('crear Ciclo')}}</a>
                    </div>

                    <table id="dtBasicExample" class="table table-striped table-bordered table-sm" cellspacing="0"
                           width="100%">
                      <thead>
                      <tr>
                        <th class="th-sm">{{__('ID')}}</th>
                        <th class="th-sm">{{__('Ciclo')}}</th>
                        <th class="th-sm">{{__('Acciones')}}</tr>
                      </thead>
                      <tbody>
                      @foreach ($ciclos as $ciclo)
                        <tr>
                          <td>{{$ciclo->id}}</td>
                          <td>{{$ciclo->ciclo}}</td>
                          <td>
                            <a rel="tooltip" class="btn btn-link btn-danger table-action remove-user"
                               data-toggle="modal" data-target="#deleteModal" data-id="{{$ciclo->id}}">
                              <i class="fa fa-remove"></i>
                            </a>
                            <a rel="tooltip" class="btn btn-link btn-warning table-action edit"
                               href="{{ route('ciclos.edit' , $ciclo->id)}} ">
                              <i class="fa fa-edit"></i>
                            </a>
                          </td>
                        </tr>
                      @endforeach
                      </tbody>
                      <tfoot>
                      <tr>
                        <th>{{__('ID')}}
                        </th>
                        <th>{{__('Ciclo')}}
                        </th>
                        <th>{{__('Acciones')}}
                        </th>
                      </tr>
                      </tfoot>
                    </table>
                  </div>

                </div>
              </div>


            </div>
          </div>
        </div>
      </div>
    </div>
  </div>



  <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
       aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modalLabel"></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p>{{__('¿Seguro que desea borrar el registro seleccionado, se borrara de la base de datos?')}}</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">{{__('Cerrar')}}</button>

          <form id="formDelete" method="POST" action="{{ route('ciclos.destroy',0) }}"
                data-action="{{ route('ciclos.destroy',0) }}">
            @method('DELETE')
            @csrf
            <button type="submit" class="btn btn-danger">{{__('Borrar')}}</button>
          </form>


        </div>
      </div>
    </div>
  </div>

  <script>
    window.onload = function () {
      $('#deleteModal').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget) // Button that triggered the modal
        var id = button.data('id') // Extract info from data-* attributes
        // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
        // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
        action = $('#formDelete').attr('data-action').slice(0, -1)
        action += id
        console.log(action)
        $('#formDelete').attr('action', action)
        var modal = $(this)
        modal.find('.modal-title').text('Vas a borrar la Academia: ' + id)
      })
    }
  </script>



  <!-- Modal -->
  <!-- Modal -->




  @include('partials.modals.upload-evidencias.upload')

@endsection