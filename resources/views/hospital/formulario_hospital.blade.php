@extends('app.master')

@section('contenido')

<div class="container-fluid">
<h1>{{ $hospital->id ? 'Editar Hospital' : 'Agregar Hospital' }}</h1>
<form action="{{ $hospital->id ? route('hospital.putApiUpdateHospital', $hospital->id) : route('hospital.postApiAddHospital') }}" method="POST">
    @csrf
    @if($hospital->id) 
            @method('PUT') 
     @endif
    <div class="mb-3">
        <label for="nombre_hospital" class="form-label">Nombre</label>
        <input type="text" class="form-control" id="nombre_hospital" name="nombre" value="{{ old('nombre', $hospital->nombre) }}" required>
    </div>

    <div class="mb-3">
        <label for="ubicacion_hospital" class="form-label">Ubicación</label>
        <input type="text" class="form-control" id="ubicacion_hospital" name="ubicacion" value="{{ old('ubicacion', $hospital->ubicacion) }}" required>
    </div>

    <button type="submit" class="btn btn-primary">{{ $hospital->id ? 'Actualizar' : 'Guardar' }}</button>
    <a href="{{ route('hospital.getApiListado') }}" class="btn btn-info">Cancelar</a>
</form>
</div>

@endsection
