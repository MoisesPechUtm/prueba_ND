@extends('app.master')
@section('contenido')

<!-- Button trigger modal -->

<div class="container-fluid">
    <h1>Listado de Tutores</h1>

<div class="row">
    <div class="col-12">
    <div class="table-responsive mt-4">
        <table class="table table-bordered table-striped table-hover">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Numero</th>
                </tr>
            </thead>
            <tbody>
                @foreach($tutores as $tutor)
                <tr>
                    <td>{{ $tutor->id }}</td>
                    <td>{{ $tutor->nombre }}</td>
                    <td>{{ $tutor->numero_tel }}</td>           
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</div>
</div>

@endsection