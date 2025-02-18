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
<body class="bg-[#E0E0E0] flex items-center justify-center h-screen w-screen">
    <div class="flex flex-col md:flex-row bg-white rounded-lg shadow-lg w-full h-full">
        <!-- Imagen independiente -->
        <div class="img__perro w-full md:w-1/2 flex justify-center items-start">
            <h1 class="text-center text-xl mt-6">Bienvenido a <span class="text-3xl ml-1 font-bold"> SpaRibera</span></h1>
        </div>
        <!-- Contenedor del formulario -->
        <div class="w-full md:w-1/2 flex flex-col justify-center items-center p-8">
            <div class="bg-[#E0D1D3] text-white p-8 rounded-lg shadow-lg border-2 border-black w-2/3">
                <h2 class="text-2xl font-bold text-center text-black mb-6">Iniciar sesión</h2>
                <form action="" method="POST" class="space-y-4">
                    <div>
                        <label for="email" class="block text-black">Correo electrónico</label>
                        <input type="email" id="email" name="email" class="w-full px-4 py-2 mt-2 border rounded-lg focus:ring-2 focus:ring-blue-400 text-black" required>
                    </div>
                    <div>
                        <label for="password" class="block text-black">Contraseña</label>
                        <input type="password" id="password" name="password" class="w-full px-4 py-2 mt-2 border rounded-lg focus:ring-2 focus:ring-blue-400 text-black" required>
                    </div>
                    <!-- AGREGAR OLVIDASTE CONTRASEÑA Y ICONS DE PERROS -->
                    <p class="text-sm text-gray-600 text-center hover:text-blue-500 transition">¿Olvidaste tu contraseña?</p>
                    <button type="submit" class="w-full bg-black text-white py-2 mb-3 rounded-lg hover:bg-gray-950 transition">Ingresar</button>
                    <hr class="my-4 border-black">
                    <p class="text-sm text-gray-600 text-center">Hazte socio para disfrutar de numerosas ventajas... <a href="#" class="text-blue-500 hover:underline">Registrarse!</a></p>
                </form>
            </div>
        </div>
    </div>
</body>
</html>

