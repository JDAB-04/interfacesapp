<?php
require ('../db.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $conn->real_escape_string($_POST['username']);
    $email = $conn->real_escape_string($_POST['email']);
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    // Verificar si el correo ya está registrado
    $check_query = "SELECT * FROM users WHERE email = '$email'";
    $check_result = $conn->query($check_query);

    if ($check_result->num_rows > 0) {
        header("Location: register.php?error=1");
        exit();
    }

    // Si no existe, lo registramos
    $query = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";
    if ($conn->query($query) === TRUE) {
        header("Location: ../login/login.php?success=1");
        exit();
    } else {
        echo "Error al registrar: " . $conn->error;
    }

    $conn->close();
}
?>
