    

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="{{asset ('css/style.css') }}">
    <link rel="shortcut icon" href="{{asset ('img/logo.png')}}" type="image/x-icon">

</head>
<body>
    <header>
        <img src="{{asset ('ima/Imagen1.png')}}" class="Logo" width="150px" >
        <nav class="navigation">
            <a href="#">Inicio</a>
            <a href="#">Iniciar Sessión</a>
        </nav>
    </header>
    <br><br>
    <div class="wrapper">
    <div class="form-box register">
        <h2>Registrarte</h2>
        <form method="post" action="{{ route('register') }}" > 
            @csrf
         <div class="input-box">
                <span class="icon">
                    <img src="{{asset ('ima/person-circle-outline (1).svg')}}" alt="Icono" width="24" height="24">
                </span>
                <input type="text" name="name" required>
                <label>Nombre</label>
            </div>
            <div class="input-box">
                <span class="icon">
                    <img src="{{asset ('ima/mail-outline.svg')}}" alt="Icono" width="24" height="24" >
                </span> 
                <input type="email" name="email" required>
                <label>Correo</label>
            </div> 
            <div class="input-box">
                <span class="icon">
                    <img src="{{ asset('ima/bag-outline.svg') }}" alt="Icono" width="24" height="24">
                </span>
                <input type="password" name="password" required>
                <label>Contraseña</label>
            </div> 
            <div class="input-box">
                <span class="icon">
                    <img src="{{ asset('ima/bag-outline.svg') }}" alt="Icono" width="24" height="24">
                </span>
                <input type="password" name="password_confirmation" required>
                <label>Confirmar Contraseña</label>
            </div> 
            <div class="input-box">
                <span class="icon">
                    <img src="{{asset ('ima/call-outline.svg')}}" alt="Icono" width="24" height="24">
                </span>
                <input type="text" name="movil" required>
                <label>Telefono</label>
            </div>  
            <div class="input-box">
                <span class="icon">
                    <img src="{{asset ('ima/person-add-outline.svg')}}" alt="Icono" width="24" height="24">
                </span>
                <select name="rol">
                    <option value=""></option>
                    <option value="user">Usuario</option>
                    <option value="admin">Bibliotecario</option>
                </select>
                <label>Cargo</label>
            </div>  
            <button type="submit" name="registrate" class="btn">Registrame</button> 
            <div class="login"></div>
            <p>Ya estoy registrado <a href="{{route ('inicio')}}" class="register-link">Iniciar sesión</a></p>

        </form>
        @if ($errors->any())
                <div class="alert">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
        @endif

    </div>
</div>


    <script src ="js/script.js"></script>
    <script  type =  " module" src = "https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js " > </script> 
    <script  nomodule  src = " https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js " > </script>


</body>
</html>

