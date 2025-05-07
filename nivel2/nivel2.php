<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Detective de Usabilidad</title>
  <link rel="stylesheet" href="nivel2.css">
</head>
<body>
  <h1>Detective de Usabilidad</h1>
  <p>¿Qué principio de usabilidad se está violando?</p>

  <div id="escenario">
    <p>Un botón que dice "Enviar" desaparece al hacer clic, pero no sabes si el formulario fue enviado o no.</p>
  </div>

  <div id="opciones">
    <button onclick="verificar('visibilidad')">Visibilidad del estado del sistema</button>
    <button onclick="verificar('consistencia')">Consistencia y estándares</button>
    <button onclick="verificar('prevencion')">Prevención de errores</button>
  </div>

  <div id="resultado"></div>

  <script src="script.js"></script>
</body>
</html>
