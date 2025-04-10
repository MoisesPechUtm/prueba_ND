@extends('app.master')
@section('contenido')

<!-- Button trigger modal -->

<div class="container-fluid">
    <h1>Listado de Pacientes</h1>

    <button type="button" class="btn btn-success">
    <a href="{{ route('paciente.addPacienteView') }}" class="btn btn-success btn-lg">Agregar Paciente</a>

    </button>

    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif
    
   

<div class="row">
    <div class="col-12">
    <div class="table-responsive mt-4">
        <table class="table table-bordered table-striped table-hover">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Edad</th>
                    <th>Sexo</th>
                    <th>Fecha de Nacimiento</th>
                    <th>Ciudad de Origen</th>
                    <th>Fecha de Inscripción</th>
                    <th>Hospital de Origen</th>
                    <th>Nombre del tutor</th>
                    <th>Teléfono del Tutor</th>
                    <th>Acciones</th>
                    <th>Descargar Alta</th>
                    
                </tr>
            </thead>
            <tbody>
                @foreach($pacientes as $paciente)
                <tr>
                    <td>{{ $paciente->id }}</td>
                    <td>{{ $paciente->nombre }}</td>
                    <td>{{ $paciente->edad }}</td>  
                    <td>{{ $paciente->sexo }}</td>  
                    <td>{{ $paciente->fecha_nacimiento }}</td>
                    <td>{{ $paciente->ciudad_origen }}</td>
                    <td>{{ \Carbon\Carbon::parse($paciente->fecha_inscripcion)->format('d/m/Y H:i') }}</td> 
                    <td>{{ $paciente->hospital->nombre }}</td>  
                    <td>{{ $paciente->tutor->nombre }}</td>  
                    <td>{{ $paciente->tutor->numero_tel }}</td>  
                    <td>
                        <a href="{{ route('paciente.addPacienteView', ['id' => $paciente->id]) }}" class="btn btn-warning"><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e8eaed"><path d="M200-200h57l391-391-57-57-391 391v57Zm-80 80v-170l528-527q12-11 26.5-17t30.5-6q16 0 31 6t26 18l55 56q12 11 17.5 26t5.5 30q0 16-5.5 30.5T817-647L290-120H120Zm640-584-56-56 56 56Zm-141 85-28-29 57 57-29-28Z"/></svg></a>
                        
                        <form action="{{ route('paciente.deleteApiEliminar', ['id' => $paciente->id]) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('¿Estás seguro de eliminar este Paciente?')"><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e8eaed"><path d="M280-120q-33 0-56.5-23.5T200-200v-520h-40v-80h200v-40h240v40h200v80h-40v520q0 33-23.5 56.5T680-120H280Zm400-600H280v520h400v-520ZM360-280h80v-360h-80v360Zm160 0h80v-360h-80v360ZM280-720v520-520Z"/></svg></button>
                        </form>
                    </td>  
                    <td>
                    <a href="{{ route('paciente.generarPDF', ['id' => $paciente->id]) }}" class="btn btn-info"><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e8eaed"><path d="M160-120v-80h640v80H160Zm320-160L280-480l56-56 104 104v-408h80v408l104-104 56 56-200 200Z"/></svg></a>
                    </td>    
                             
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</div>
</div>

@endsection