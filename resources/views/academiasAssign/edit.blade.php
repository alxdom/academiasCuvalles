@extends('layouts.main')

@section('content')
  <div class="content">
    <div class="container-fluid">
      <div class="container">
        <div class="row">

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
                      <th>Id Academia</th>
                      <th>Acción</th>
                    </tr>
                    </thead>

                    <tbody>
                    <form action="{{ route('academiasAssign.update', $MATERIAS->crn) }}" method="POST">
                      @method('PATCH')
                      @csrf

                      <tr>
                        <td>
                          {{$MATERIAS->crn}}
                        </td>

                        <td>
                          <select name="academia" id="academia" class="form-control">
                            <option value="">Selecciona una academia</option>
                            @foreach ($academias as $academia)
                              <option value="{{$academia->id}}">{{$academia->nombre}}</option>
                            @endforeach
                          </select>
                        </td>

                        <td>
                          <button type="submit" class="btn">Guardar</button>
                        </td>
                      </tr>
                    </form>
                    </tbody>
                  </table>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
    


@endsection