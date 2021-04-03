{{ csrf_field() }}
<div class="form-row m-3 p-3">
  <div class="col">
    <label for="categoria">Nombre</label>
    <input class="form-control" type="text" name="nombre" id="nombre"
           placeholder="Por favor escriba el nombre de la categoria"
           value="{{old('nombre',$academia->nombre)}}"
    >
    @error('title')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
  </div>
</div>
@if($isEdit)<button type="submit" class="btn btn-primary">editar</button>
@else <button type="submit" class="btn btn-primary">crear</button>@endif
