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
    <title>ColorKids - Dashboard</title>
    <link rel="stylesheet" href="dashboard.css?v=<?= time() ?>">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <header class="header">
        <h2><i class='bx bxs-invader'></i>ColorKids</h2>
        <h1>Tu camino como diseñador</h1>
        <div class="user-info" onclick="toggleMenu()">
            <i class='bx bx-user'></i> <?php echo htmlspecialchars($user); ?>
            <div class="dropdown" id="userDropdown">
                <a href="logout.php">Cerrar sesión</a>
            </div>
        </div>
    </header>
    <main class="dashboard">
        <section class="sidebar">
            <h3>CONTENIDO DE COLORKIDS</h3>
            <a href="./nivel1/nivel1.php" class="modulo">
                <img src="./imagenes/pintura.png" alt="Nivel 1">
                <div>
                    <strong class="titulos">Nivel 1</strong><br>Maestro de los colores
                </div>
            </a>
            <a href="./nivel2/nivel2.php" class="modulo">
                <img src="./imagenes/escudo.png" alt="Nivel 2">
                <div>
                    <strong class="titulos">Nivel 2</strong><br>Guardián de los principios
                </div>
            </a>
            <a href="./nivel3/nivel3.php" class="modulo">
                <img src="./imagenes/cerebro.png" alt="Nivel 3">
                <div>
                    <strong class="titulos">Nivel 3</strong><br>Cerebro de Gestalt
                </div>
            </a>
            <a href="./nivel4/nivel4.php" class="modulo">
                <img src="./imagenes/casco.png" alt="Nivel 4">
                <div>
                    <strong class="titulos">Nivel 4</strong><br>Constructor de pantallas
                </div>
            </a>
        </section>

        <section class="main-content">
            <div class="mensaje">
                <h4>¡Hola <?php echo htmlspecialchars($user); ?>!</h4>
                <p>
                   Empieza a dominar los colores y tipografías con nuestro curso. 
                   Aprende desde la teoría hasta el diseño de interfaces.
                </p>
            </div>
            <div class="robot">
                <img src="imagenes/robot2.png" alt="Robot">
            </div>
        </section>
    </main>
</body>
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
</html>
