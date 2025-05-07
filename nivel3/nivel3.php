<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Principios de Gestalt</title>
  <link rel="stylesheet" href="nivel3.css">
</head>
<body>
  <h1>Detective de Gestalt</h1>
  <p>¿Qué principio se aplica en esta imagen?</p>

  <div id="escenario">
    <!-- Ejemplo: Proximidad -->
    <div class="grupo">
      <div class="circulo"></div>
      <div class="circulo"></div>
    </div>
    <div class="grupo separado">
      <div class="circulo"></div>
      <div class="circulo"></div>
    </div>
  </div>

  <div id="opciones">
    <button onclick="verificar('proximidad')">Proximidad</button>
    <button onclick="verificar('semejanza')">Semejanza</button>
    <button onclick="verificar('cierre')">Cierre</button>
  </div>

  <div id="resultado"></div>

  <script src="script.js"></script>
</body>
</html>
