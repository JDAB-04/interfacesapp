<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: login/login.php");
    exit();
}
$user = $_SESSION['user'];
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Mezcla de Colores</title>
  <link rel="stylesheet" href="nivel1.css?v=<?= time() ?>">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
<header class="header">
      <h2><i class='bx bxs-invader'></i>ColorKids</h2>
      <h1>Maestro de los colores</h1>
      <div class="user-info" onclick="toggleMenu()">
          <i class='bx bx-user'></i> <?php echo htmlspecialchars($user); ?> <i class='bx bx-chevron-down'></i>
            <div class="dropdown" id="userDropdown">
              <a href="../dashboard.php"><i class='bx bx-home'></i>Inicio</a>
              <a href="../logout.php"><i class='bx bx-log-out'></i>Cerrar sesión</a>
            </div>
      </div>
</header>
  <h1>¡Mezcla los colores disponibles y descubre el resultado!</h1>
  <div class="colors">
    <div class="color" draggable="true" data-color="rojo" style="background: red;"></div>
    <div class="color" draggable="true" data-color="azul" style="background: blue;"></div>
    <div class="color" draggable="true" data-color="amarillo" style="background: yellow;"></div>
    <div class="color" draggable="true" data-color="verde" style="background: green;"></div>
    <div class="color" draggable="true" data-color="blanco" style="background: white;"></div>
    <div class="color" draggable="true" data-color="negro" style="background: black;"></div>
  </div>

  <div class="contenedor-mezcla">
    <div id="frasco" ondragover="allowDrop(event)" ondrop="dropColor(event)">
      <p>Arrastra aquí</p>
    </div>

    <div id="resultado">
      <p>Color mezclado:</p>
      <div id="color-mezclado"></div>
    </div>
  </div>
  
  <script src="script.js"></script>
  <script>
        function toggleMenu() {
            const dropdown = document.getElementById('userDropdown');
            dropdown.style.display = dropdown.style.display === 'block' ? 'none' : 'block';
        }

        // Cierra el menú si haces clic fuera
        window.addEventListener('click', function(e) {
            const userInfo = document.querySelector('.user-info');
            const dropdown = document.getElementById('userDropdown');
            if (!userInfo.contains(e.target)) {
                dropdown.style.display = 'none';
            }
        });
    </script>
</body>
</html>
