<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Color Kids - Login</title>
    <link rel="stylesheet" href="../estilos/login.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <div class="background"></div>
    <div class="container">
        <div class="content">
            <h2 class="logo"><i class='bx bxs-invader'></i>ColorKids</h2>
            
            <div class="text-sci">
                <h2>¡Bienvenido<br><span>a ColorKids!</span></h2>
                <p>
                    Lorem ipsum dolor sit amet,
                    consectetur adipisicing elit. Non elige
                </p>
            </div>
        </div>

        <div class="logreg-box">
            <div class="form-box login">
                <form action="register_process.php" method="POST">
                    <h2>¡Registrate!</h2>

                    <div class="input-box">
                        <span class="icon"><i class='bx bxs-user'></i></span>
                        <input type="text" name="username" required>
                        <label>Usuario</label>
                    </div>

                    <div class="input-box">
                        <span class="icon"><i class='bx bxs-envelope'></i></span>
                        <input type="email" name="email" required>
                        <label>Correo</label>
                    </div>
                    
                    <div class="input-box">
                        <span class="icon"><i class='bx bxs-lock-alt'></i></span>
                        <input type="password"  name="password" required>
                        <label>Contraseña</label>
                    </div>
                    
                    <button type="submit" class="btn">Registrarme</button>

                    <div class="login-register">
                        <p>
                            ¿Ya tienes cuenta? 
                            <a href="../login/login.php" class="register-link">Iniciar Sesión</a>
                        </p>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <?php if (isset($_GET['error']) && $_GET['error'] == 1): ?>
        <script>
           alert("El correo ya está registrado. Intenta con otro.");
        </script>
    <?php endif; ?>
</body>
</html>
