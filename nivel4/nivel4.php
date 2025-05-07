<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Juego de Wireframes</title>
  <link rel="stylesheet" href="nivel4.css">
</head>
<body>
  <h1>Arma tu Wireframe</h1>
  <p>Arrastra los elementos al lugar correcto según el diseño.</p>

  <div class="zona-elementos">
    <div class="elemento" draggable="true" data-tipo="encabezado">Encabezado</div>
    <div class="elemento" draggable="true" data-tipo="imagen">Imagen</div>
    <div class="elemento" draggable="true" data-tipo="boton">Botón</div>
  </div>

  <div class="wireframe">
    <div class="zona-drop" data-receptor="encabezado">Top (Encabezado)</div>
    <div class="zona-drop" data-receptor="imagen">Centro (Imagen)</div>
    <div class="zona-drop" data-receptor="boton">Abajo (Botón)</div>
  </div>

  <div id="resultado"></div>

  <script src="script.js"></script>
</body>
</html>
