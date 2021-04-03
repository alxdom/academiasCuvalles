@extends('layouts.main')
@section('content')
  <div class="content">
    <div class="container-fluid">
      <div class="container">
        <div class="row">
          <div class="col-md-9 mx-auto">
            <div class="card">
              <div class="card-body">
                <h3>{{__('Ciclo')}}</h3>
                <form method="POST" action="{{route('ciclos.update', $ciclo->id)}}" accept-charset="UTF-8" enctype="multipart/form-data">
                  @method('PUT')
                  @include('ciclos._form')
                </form>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>




@endsection




