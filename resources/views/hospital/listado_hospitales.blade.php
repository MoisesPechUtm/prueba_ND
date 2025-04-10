@extends('app.master')
@section('contenido')

<!-- Button trigger modal -->

<div class="container-fluid">
    <h1>Listado de Hospitales</h1>

    <button type="button" class="btn btn-success">
    <a href="{{ route('hospital.addHospitalView') }}" class="btn btn-success btn-lg">Agregar Hospital</a>

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
                    <th>Ubicación</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($hospitales as $hospital)
                <tr>
                    <td>{{ $hospital->id }}</td>
                    <td>{{ $hospital->nombre }}</td>
                    <td>{{ $hospital->ubicacion }}</td>  
                    <td>
                        <a href="{{ route('hospital.addHospitalView', ['id' => $hospital->id]) }}" class="btn btn-warning">Editar</a>
                        <form action="{{ route('hospital.deleteApiEliminar', ['id' => $hospital->id]) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('¿Estás seguro de eliminar este hospital?')">Eliminar</button>
                        </form>
                    </td>           
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</div>
</div>

@endsection