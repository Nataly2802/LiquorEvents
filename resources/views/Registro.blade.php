<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LiquorEvents - Registro de Usuario</title>
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <link rel="icon" href="{{ asset('IMG/Logo.png') }}">
</head>
<body>
    <header>
        <div style="text-align:center;">
            <img src="{{ asset('IMG/Logo.png') }}" width="200" alt="Logo LiquorEvents">
        </div>
        <nav class="menu"> 
            <ul>
                <li><a href="{{ url('/') }}">Inicio</a></li>
                <li><a href="{{ url('/login') }}">Iniciar Sesión</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <h2 style="text-align:center;">Registro de Usuario</h2>
        <form action="{{ route('usuarios.store') }}" method="POST" id="formRegistro">
            @csrf

            <label for="nombre">Nombre *</label>
            <input type="text" id="nombre" name="nombre" required>

            <label for="apellido">Apellido *</label>
            <input type="text" id="apellido" name="apellido" required>

            <label for="correo">Correo *</label>
            <input type="email" id="correo" name="correo" required>

            <label for="usuario">Usuario *</label>
            <input type="text" id="usuario" name="usuario" required>

            <label for="password">Contraseña *</label>
            <input type="password" id="password" name="password" required>

            <label for="confirmPassword">Confirmar Contraseña *</label>
            <input type="password" id="confirmPassword" name="confirmPassword" required>

            <label for="rol">Rol *</label>
            <select id="rol" name="rol" required>
                <option value="">Seleccione...</option>
                <option value="administrador">Administrador</option>
                <option value="participante">Participante</option>
                <option value="organizador">Organizador</option>
            </select>

            <br><br>
            <input type="submit" value="REGISTRAR" class="boton">
        </form>
    </main>

    <script>
        document.getElementById("formRegistro").addEventListener("submit", function(e){
            const pass = document.getElementById("password").value;
            const confirmPass = document.getElementById("confirmPassword").value;

            if(pass !== confirmPass){
                e.preventDefault();
                alert("Las contraseñas no coinciden.");
            }
        });
    </script>
</body>
</html>
