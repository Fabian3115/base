@extends('Interfaz.dashboard_admin')

@section('content')

<form method="post" action="{{route('libro.update', $libro ->id) }}">
    @csrf
    @method('PUT')
    <div class="container mt-4">
        <div class="card" style="background-color: #343a40; color: aliceblue;">
            <div class="card-header text-center">
                <h2>Editar Libro</h2>
            </div>
            <div class="card-body">
                
                    <div class="form-group">
                        <label for="estado_id">Estado</label>
                        <input type="number" name="estado_id" value="{{old('estado_id',$libro->estado_id)}}" id="estado_id" class="form-control" placeholder="1=M o 2=E" required>
                    </div>
                    <div class="form-group">
                        <label for="titulo">Título</label>
                        <input type="text" name="titulo" value="{{old('titulo',$libro->titulo)}}" id="titulo" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="autor">Autor</label>
                        <input type="text" name="autor" value="{{old('autor',$libro->autor)}}" id="autor" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="genero">Género</label>
                        <input type="text" name="genero" value="{{old('genero',$libro->genero)}}" id="genero" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="ano_publicacion">Año de Publicación</label>
                        <input type="date" name="ano_publicacion" value="{{old('ano_publicacion',$libro->ano_publicacion)}}" id="ano_publicacion" class="form-control" required>
                    </div>
                    <br>
                    <button type="submit" class="btn btn-success">Actualizar</button>
                    <a href="{{ route('libro.index') }}" class="btn btn-danger">Cancelar</a>
                
            </div>
        </div>
    </div>
</form>

@endsection