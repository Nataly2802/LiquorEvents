<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>LiquorEvents - Gestión</title>
  <style>
    body { font-family: Arial, sans-serif; margin:0; background:#f5faff; }
    header { background:#00c3d6; color:white; padding:15px; }
    h1 { margin:0; }
    section { margin:20px; background:white; padding:20px; border-radius:10px;
              box-shadow:0 3px 8px rgba(0,0,0,0.1); }
    h2 { color:#00c3d6; }
    form { margin-bottom:20px; }
    form input, form select { margin:5px; padding:5px; }
    table { width:100%; border-collapse:collapse; margin-top:10px; }
    table, th, td { border:1px solid #ddd; }
    th, td { padding:10px; text-align:center; }
    button { padding:5px 10px; margin:3px; border:none; border-radius:5px;
             background:#00c3d6; color:white; cursor:pointer; }
    button:hover { background:#009aa8; }
  </style>
</head>
<body>

<header>
  <h1>Gestión de Torneos, Juegos y Reservas</h1>
</header>

<section>
  <h2>🏆 Torneos</h2>
  <form id="formTorneo">
    <input type="text" id="torneoNombre" placeholder="Nombre Torneo" required>
    <input type="date" id="torneoFecha" required>
    <input type="number" id="torneoEquipos" placeholder="Máx Equipos" required>
    <button type="submit">Agregar Torneo</button>
  </form>
  <table id="tablaTorneos">
    <thead>
      <tr><th>Nombre</th><th>Fecha</th><th>Máx Equipos</th><th>Acciones</th></tr>
    </thead>
    <tbody></tbody>
  </table>
</section>

<section>
  <h2>🎲 Juegos</h2>
  <form id="formJuego">
    <input type="text" id="juegoNombre" placeholder="Nombre Juego" required>
    <input type="text" id="juegoDesc" placeholder="Descripción" required>
    <input type="number" id="juegoMin" placeholder="Mín Jugadores" required>
    <input type="number" id="juegoMax" placeholder="Máx Jugadores" required>
    <button type="submit">Agregar Juego</button>
  </form>
  <table id="tablaJuegos">
    <thead>
      <tr><th>Nombre</th><th>Descripción</th><th>Min</th><th>Max</th><th>Acciones</th></tr>
    </thead>
    <tbody></tbody>
  </table>
</section>

<section>
  <h2>📅 Reservas</h2>
  <form id="formReserva">
    <input type="text" id="reservaJuego" placeholder="Juego" required>
    <input type="datetime-local" id="reservaInicio" required>
    <input type="datetime-local" id="reservaFin" required>
    <input type="number" id="reservaPersonas" placeholder="Personas" required>
    <button type="submit">Agregar Reserva</button>
  </form>
  <table id="tablaReservas">
    <thead>
      <tr><th>Juego</th><th>Inicio</th><th>Fin</th><th>Personas</th><th>Acciones</th></tr>
    </thead>
    <tbody></tbody>
  </table>
</section>

<script>
  function setupForm(formId, tableId, fields) {
    const form = document.getElementById(formId);
    const table = document.getElementById(tableId).querySelector("tbody");

    form.addEventListener("submit", e => {
      e.preventDefault();
      const values = fields.map(f => document.getElementById(f).value);
      const row = document.createElement("tr");
      values.forEach(v => {
        const td = document.createElement("td");
        td.textContent = v;
        row.appendChild(td);
      });

      const tdAcc = document.createElement("td");
      const btnDel = document.createElement("button");
      btnDel.textContent = "Eliminar";
      btnDel.onclick = () => row.remove();
      tdAcc.appendChild(btnDel);
      row.appendChild(tdAcc);

      table.appendChild(row);
      form.reset();
    });
  }
  setupForm("formTorneo", "tablaTorneos", ["torneoNombre","torneoFecha","torneoEquipos"]);
  setupForm("formJuego", "tablaJuegos", ["juegoNombre","juegoDesc","juegoMin","juegoMax"]);
  setupForm("formReserva", "tablaReservas", ["reservaJuego","reservaInicio","reservaFin","reservaPersonas"]);
</script>

</body>
</html>
