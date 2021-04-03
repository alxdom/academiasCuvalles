{{ csrf_field() }}
<div class="form-row m-3 p-3">
  <div class="col">
    <label for="categoria">{{__('Ciclo')}}</label>
    <input class="form-control" type="text" name="ciclo" id="ciclo"
           placeholder="Por favor escriba el nombre del ciclo"
           value="{{old('ciclo',$ciclo->ciclo)}}"
    >
    @error('ciclo')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
  </div>

</div>
@if($isEdit)<button type="submit" class="btn btn-primary">editar</button>
@else <button type="submit" class="btn btn-primary">crear</button>@endif