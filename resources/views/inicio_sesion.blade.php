<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    
    <link rel="icon" href="{{ asset('IMG/Logo.png') }}">

   
    <link rel="stylesheet" href="{{ asset('css/indexx.css') }}">

    <title>LiquorEvents - Iniciar Sesión</title>
</head>
<body>
    <header>
        <div style="text-align:center;">
            <img src="{{ asset('IMG/Logo.png') }}" width="250" height="150" alt="Logo LiquorEvents">
        </div>
        <nav class="menu"> 
            <ul>
                <li><a href="{{ url('/') }}">Inicio</a></li>
            </ul>
        </nav>
    </header>
    
    <main class="login-container">
        <h2>Iniciar Sesión</h2>
        <form id="loginForm">
            <label for="correo">Correo *</label>
            <input type="email" id="correo" name="correo" required>
            
            <label for="password">Contraseña *</label>
            <input type="password" id="password" name="password" required>
            
            <input type="submit" value="INICIAR SESIÓN" class="boton">
            
            <div style="text-align:center; margin-top:1rem;">
                <a href="#" id="olvidoPassword">¿Olvidó su contraseña?</a><br>
                <a href="{{ url('registro') }}">Registrarme</a>
            </div>
        </form>
    </main>

    <script>
       
        document.getElementById("olvidoPassword").addEventListener("click", function(e) {
            e.preventDefault();
            window.location.href = "{{ url('recomendaciones') }}";
        });

        document.getElementById("loginForm").addEventListener("submit", async function(e) {
            e.preventDefault();
            
            const correo = document.getElementById("correo").value.trim();
            const password = document.getElementById("password").value.trim();
            
            if (!correo || !password) {
                alert("Por favor, complete todos los campos requeridos.");
                return;
            }
            
            if (!validarEmail(correo)) {
                alert("El formato del correo no es válido.");
                return;
            }

            const loginValido = (correo === "demo@liquorevents.com" && password === "demo123");

            if (loginValido) {
                window.location.href = "{{ url('dashboard') }}"; 
            } else {
                alert("Usuario o contraseña inválidos. Revise e intente nuevamente.");
            }
        });
        
        function validarEmail(email) {
            const partes = email.split("@");
            if (partes.length !== 2) return false;

            const [usuario, dominio] = partes;
            if (!usuario || !dominio.includes(".")) return false;

            return true;
        }
    </script>
</body>
</html>
