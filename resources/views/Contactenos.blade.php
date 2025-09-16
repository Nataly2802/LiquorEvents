<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  {{-- Favicon --}}
  <link rel="icon" href="{{ asset('IMG/Logo.png') }}">
  {{-- Estilos --}}
  <link rel="stylesheet" href="{{ asset('css/index.css') }}">
  <title>LiquorEvents</title>
</head>
<body>
  <header>
    {{-- Logo --}}
    <img src="{{ asset('IMG/Logo.png') }}" alt="Logo LiquorEvents" class="logo" width="250" height="150">
    <nav class="menu"> 
      <ul>
        <li><a href="{{ url('index') }}">Inicio</a></li>
      </ul>
    </nav>
  </header>

  <form method="post" onsubmit="return validar_form();">
    <label for="name">Nombre</label>
    <input type="text" id="name" required>

    <label for="telefono">Teléfono</label>
    <input type="tel" id="telefono" required>

    <label for="email">Email</label>
    <input type="email" id="email" required>

    <label for="mensaje">Mensaje</label>
    <textarea id="mensaje" required></textarea>

    <input type="submit" value="ENVIAR">
  </form>

  <script>
    function validar_form() {
      return validar_mail();
    }
    
    function validar_mail() {
      const obj = document.getElementById("email");
      const cor = obj.value;
      const arroba = (cor.match(/@/g) || []).length;
      const punto = cor.includes(".");

      if (arroba === 1 && punto) {
        return true;
      } else {
        alert("El correo no es válido");
        obj.focus();
        return false;
      }
    }
  </script>
</body>
</html>
