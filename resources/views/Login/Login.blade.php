<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sessión</title>
    <link rel="stylesheet" href="{{asset ('css/login.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="shortcut icon" href="{{asset ('IMG/libros.png')}}" type="image/x-icon">

</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="#"><img src="../IMG/Imagen1.png" style="width: 40%;"></a>
        </div>
      </nav>
    <div class="Caja">
      <form method="post" action="{{ route('Validar') }}">
        @csrf
<h1 class="animate__animated animate__backInLeft">Inicio de sesion</h1>
<p class="blanco">Correo <input type="text" placeholder="Correo Electronico" name="email"  autocomplete="new-email" required></p>
<p class="blanco">Contraseña <input type="password" placeholder="Contraseña" name="password" autocomplete="new-password" required></p>

<input class="btn btn-success" type="submit" value="Ingresar">
<br>
<br>
    <div class="recordar"  style="display: flex;">
      <input  type="checkbox"  style="width: 10%;">
      <label  style="color: aliceblue; padding-right: 5px; font-family:'Courier New', Courier, monospace;">Recordar Contraseña</label>
    </div> 
    <br>
  <p style="color: white; margin: 10px;">¿Aún no tienes cuenta?</p>
  <a href="{{route ('register')}}" class="aa">Registrate aquí</a>
</form>
</div> 

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

</body>
</html>