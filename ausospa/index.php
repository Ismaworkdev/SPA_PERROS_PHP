<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';
    
    // PRUEBA DE CREDENCIALES
    if ($email === "admin@example.com" && $password === "1234") {
        echo "<script>alert('Inicio de sesión exitoso');</script>";
    } else {
        echo "<script>alert('Credenciales incorrectas');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="./resources/css/style.css">
</head>
<body class="bg__login bg-gray-100 flex items-center justify-center h-screen">
    <div class="bg-[#413F40] text-white p-8 rounded-lg shadow-lg max-w-sm w-full">
        <h2 class="text-2xl font-bold text-center text-white mb-6">Iniciar sesión</h2>
        <form action="" method="POST" class="space-y-4">
            <div>
                <label for="email" class="block text-white">Correo electrónico</label>
                <input type="email" id="email" name="email" class="w-full px-4 py-2 mt-2 border rounded-lg focus:ring-2 focus:ring-blue-400" required>
            </div>
            <div>
                <label for="password" class="block text-white">Contraseña</label>
                <input type="password" id="password" name="password" class="w-full px-4 py-2 mt-2 border rounded-lg focus:ring-2 focus:ring-blue-400" required>
            </div>
            <button type="submit" class="w-full bg-black text-white py-2 rounded-lg hover:bg-gray-950 transition">Ingresar</button>
        </form>
    </div>
</body>
</html>
