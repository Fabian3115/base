@extends('Interfaz.dashboard_admin')

@section('content')

<div class="container mt-4">
    <h1 class="mb-4" style="color:aliceblue;">Listado de Libros</h1>
    <a href="{{route('libro.create')}}" class="btn btn-primary mb-3">Añadir Nuevo Libro</a>
    <table class="table table-bordered table-striped">
        <thead class="thead-dark">
            <tr>
                <th>ID</th>
                <th>Estado</th>
                <th>Titulo</th>
                <th>Autor</th>
                <th>Genero</th>
                <th>Año de Publicación</th>
                <th>Acciones</th>
            </tr>
        </thead> 

        <tbody>
            @foreach ($libros as $libro)
                <tr>
                    <td>{{ $libro ->id }}</td>
                    <td>{{ $libro ->estado_id }}</td>
                    <td>{{ $libro ->titulo }}</td>
                    <td>{{ $libro ->autor }}</td>
                    <td>{{ $libro ->genero }}</td>
                    <td>{{ $libro ->ano_publicacion }}</td>
                    <td class="border px-4 py-2 text-center">
                        <div class="flex justify-center">
                         
                            <a href="{{route('libro.edit', $libro ->id )}}" class="btn btn-success btn-sm">Editar</a>
                            <a href="{{route('libro.destroy',  $libro ->id )}}" class="btn btn-danger btn-sm">Eliminar</a>
                        </div>                
                    </td>
                </tr>
        
            @endforeach
        </tbody>
    </table>
</div>
    
@endsection
