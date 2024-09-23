<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="../IMG/libros.png" type="image/x-icon">
    <link rel="stylesheet" href="{{asset('css/User.css')}}">
    <title>Biblioteca Online</title>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary" style="padding: 1px;" >
  <div class="container-fluid">
    <a class="navbar-brand"><img src="../img/Imagen1.png" style="width: 25%;"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="../Interfaz/Usuario.php">Inicio</a>
        </li>
       
        <li class="nav-item">
          <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal">Solicitud</a>
        </li>
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Solicitud !</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                   <form>
                    <div class="mb-3">
                      <label for="exampleFormControlInput1" class="form-label">Autor:</label>
                      <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Autor del libro">
                    </div>
                    <div class="mb-3">
                      <label for="exampleFormControlInput1" class="form-label">Titulo:</label>
                      <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Titulo del libro">
                    </div>
                    <div class="mb-3">
                      <label for="exampleFormControlInput1" class="form-label">Género:</label>
                      <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Género del libro">
                    </div>
                   </form>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Reservar</button>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
                  </div>
                </div>
              </div>
            </div>
        
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Buscar el libro" aria-label="Search">
        <button class="btn btn-outline-success"  type="submit">Buscar</button>
      </form>
      
        <div class="dropdown">
            <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                <img src="../IMG/logo.png" alt="Perfil" style="width: 40px; border-radius: 50%;">
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenu">
                <li><a class="dropdown-item" href="#">Mi perfil</a></li><hr>
                <li><a class="dropdown-item" href="{{route ('logout')}}">Cerrar sesión</a></li>
            </ul>
        </div>
  </div>
</nav>

    <img src="../IMG/Fondo.jpg" style="width: 100%;">

</body>
</html>