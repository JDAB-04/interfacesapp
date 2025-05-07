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
  <title>Guardián de los principios</title>
  <link rel="stylesheet" href="nivel2.css?v=<?= time() ?>">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
  <header class="header">
      <h2><i class='bx bxs-invader'></i>ColorKids</h2>
      <h1>Guardián de los principios</h1>
        <div class="user-info" onclick="toggleMenu()">
            <i class='bx bx-user'></i> <?php echo htmlspecialchars($user); ?> <i class='bx bx-chevron-down'></i>
              <div class="dropdown" id="userDropdown">
                <a href="../dashboard.php"><i class='bx bx-home'></i>Inicio</a>
                <a href="../logout.php"><i class='bx bx-log-out'></i>Cerrar sesión</a>
              </div>
        </div>
  </header>

  <div class="mensaje">
    <h1>¡Como guardián debes estar <br> preparado para las preguntas de los intrusos!</h1>
    <p>¿Qué principio de usabilidad se está violando?</p>
  </div>
  
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
