<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Mezcla de Colores</title>
  <link rel="stylesheet" href="nivel1.css">
</head>
<body>
  <h1>Mezcla de Colores</h1>
  <div class="colors">
    <div class="color" draggable="true" data-color="rojo" style="background: red;"></div>
    <div class="color" draggable="true" data-color="azul" style="background: blue;"></div>
    <div class="color" draggable="true" data-color="amarillo" style="background: yellow;"></div>
  </div>

  <div id="frasco" ondragover="allowDrop(event)" ondrop="dropColor(event)">
    <p>Arrastra aquí</p>
  </div>

  <div id="resultado">
    <p>Color mezclado:</p>
    <div id="color-mezclado"></div>
  </div>

  <script src="script.js"></script>
</body>
</html>
