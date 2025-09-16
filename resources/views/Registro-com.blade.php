<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{ asset('IMG/Logo.png') }}">
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <title>LiquorEvents - Registro de Equipo</title>
</head>
<body>
    <header>
       <div style="text-align:center;">
           <img src="{{ asset('IMG/Logo.png') }}" width="300" height="200" alt="Logo LiquorEvents">
       </div>
        <nav class="menu"> 
             <ul>
                <li><a href="{{ url('/') }}">Inicio</a></li>
             </ul>
        </nav>
    </header>

    <main>
        {{-- Formulario de registro de equipo --}}
        <form id="formEquipo" method="post" novalidate>
            @csrf

            <label for="usu">Nombre equipo</label>
            <input type="text" id="usu" name="usu" required>

            <label for="no">Número de Jugadores</label>
            <select name="Jugadores" id="no" required>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
            </select>
            
            <label for="email">Correo</label>
            <input type="email" id="email" name="email" required>
            
            <label for="telefono">Teléfono</label>
            <input type="tel" id="telefono" name="telefono" required pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}">

            <input type="submit" value="REGISTRAR">
        </form>
    </main>

    <script> 
        document.getElementById("formEquipo").addEventListener("submit", function(e){
            const email = document.getElementById("email").value.trim();
            if(!validarMail(email)){
                e.preventDefault();
                alert("El correo no es válido.");
                document.getElementById("email").focus();
            }
        });

        function validarMail(correo){
            const regex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            return regex.test(correo);
        }
    </script>
</body>
</html>
