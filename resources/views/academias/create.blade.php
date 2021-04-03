@extends('layouts.main')
@section('content')
  <div class="content">
    <div class="container-fluid">
      <div class="container">
        <div class="row">
          <div class="col-md-9 mx-auto">
            <div class="card">
              <div class="card-body">
                <h3>{{__('Academias')}}</h3>
                <form method="POST" action="{{route('academias.store')}}" accept-charset="UTF-8" enctype="multipart/form-data">
                  {{ csrf_field() }}
                  @include('academias._form')
                </form>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>




@endsection




