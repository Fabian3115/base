@extends('Interfaz.dashboard_admin')

@section('content')

 <form action="{{route('libro.store')}}" method="POST">
    @csrf
    <div class="container mt-4">
        <h2 style="color:aliceblue;">Registrar un Nuevo Libro</h2>
            <div class="form-group">
                <label for="estado_id" style="color:aliceblue;">Estado </label>
                <input type="number" name="estado_id" id="estado_id" class="form-control" placeholder="1=M o 2=E" required>
            </div>
            <div class="form-group">
                <label for="titulo" style="color:aliceblue;">Titulo</label>
                <input type="text" name="titulo" id="titulo" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="autor" style="color:aliceblue;">Autor</label>
                <input type="text" name="autor" id="autor" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="genero" style="color:aliceblue;">Género</label>
                <input type="text" name="genero" id="genero" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="ano_publicacion" style="color:aliceblue;">Año de Publicación</label>
                <input type="date" name="ano_publicacion" id="ano_publicacion" class="form-control" required>
            </div>
            <br>

            <button type="submit" class="btn btn-success btn-sm ">Guardar</button>
            <a href="{{route('libro.index')}}" class="btn btn-danger btn-sm">Cancelar</a>
    </div>
 </form>
    
@endsection