@extends('app.master')

@section('contenido')
<div class="container-fluid">
    <h1>{{ $paciente->id ? 'Editar Paciente' : 'Agregar Paciente' }}</h1>

    <form action="{{ $paciente->id ? route('paciente.putApiUpdatePaciente', $paciente->id) : route('paciente.postApiAddPaciente') }}" method="POST">
        @csrf
        @if($paciente->id) 
            @method('PUT') 
        @endif

        <!-- Nombre del Paciente -->
        <div class="mb-3">
            <label for="nombre_paciente" class="form-label">Nombre del Paciente</label>
            <input type="text" name="nombre" class="form-control" value="{{ old('nombre', $paciente->nombre) }}" required>
        </div>

        <!-- Sexo del Paciente -->
        <div class="mb-3">
            <select name="sexo" class="form-select" required>
                <option value="Masculino" {{ $paciente->sexo == 'Masculino' ? 'selected' : '' }}>Masculino</option>
                <option value="Femenino" {{ $paciente->sexo == 'Femenino' ? 'selected' : '' }}>Femenino</option>
                <option value="Otro" {{ $paciente->sexo == 'Otro' ? 'selected' : '' }}>Otro</option>
            </select>
        </div>

        <!-- Fecha de Nacimiento del Paciente -->
        <div class="mb-3">
            <label for="fecha_nacimiento_paciente" class="form-label">Fecha de Nacimiento del Paciente</label>
            <input type="date" name="fecha_nacimiento" class="form-control" value="{{ old('fecha_nacimiento', $paciente->fecha_nacimiento) }}" required>
        </div>

        <!-- Ciudad de Origen del Paciente -->
        <div class="mb-3">
            <label for="ciudad_origen_paciente" class="form-label">Ciudad de Origen del Paciente</label>
            <input type="text" name="ciudad_origen" class="form-control" value="{{ old('ciudad_origen', $paciente->ciudad_origen) }}" required>
        </div>

        <!-- Fecha de Inscripción del Paciente -->
        <div class="mb-3">
            <label for="fecha_inscripcion_paciente" class="form-label">Fecha de Inscripción del Paciente</label>
            <input type="datetime-local" name="fecha_inscripcion" class="form-control" value="{{ old('fecha_inscripcion', $paciente->fecha_inscripcion) }}" required>
        </div>

        <!-- Hospital de Origen del Paciente -->
        <div class="mb-3">
            <label for="hospital_id" class="form-label">Hospital de Origen</label>
            <select name="hospital_id" class="form-select" required>
                <option value="">Selecciona un Hospital</option>
                @foreach($hospitales as $hospital)
                    <option value="{{ $hospital->id }}" {{ $paciente->hospital_id == $hospital->id ? 'selected' : '' }}>
                        {{ $hospital->nombre }}
                    </option>
                @endforeach
            </select>
        </div>

        <!-- Nombre del Tutor -->
        <div class="mb-3">
            <input type="hidden" name="tutor_id" value="{{ old('tutor_id', $paciente->tutor_id) }}">
            <label for="tutor_nombre" class="form-label">Nombre del Tutor</label>
            <input type="text" name="tutor_nombre" class="form-control" value="{{ old('tutor_nombre', $tutor->nombre) }}" required>
        </div>

        <!-- Número del Tutor -->
        <div class="mb-3">
            <label for="numero_tel" class="form-label">Número del Tutor</label>
            <input type="text" name="numero_tel" class="form-control" value="{{ old('numero_tel', $tutor->numero_tel) }}" required>
        </div>

        <button type="submit" class="btn btn-primary">{{ $paciente->id ? 'Actualizar' : 'Guardar' }}</button>
        <a href="{{ route('paciente.getApiListado') }}" class="btn btn-info">Cancelar</a>
    </form>
</div>
@endsection
