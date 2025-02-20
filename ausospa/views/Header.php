<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | SpaRibera</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="./../resources/css/style.css">
</head>

<body>
    <!-- Header -->
    <header class="flex items-center justify-between px-8 py-4 bg-[#DCD9DA] text-black shadow-md">
        <!-- Logo o Nombre -->
        <h1 class="text-3xl font-extrabold tracking-wide">
            Spa<span class="text-gray-700">Ribera</span>
        </h1>
    
        <!-- Menú de navegación -->
        <nav class="hidden md:flex space-x-8 text-lg font-medium">
            <a href="./indexView.php" class="hover:text-blue-600 transition">Inicio</a>
            <a href="#" class="hover:text-blue-600 transition">Servicios</a>
            <a href="#" class="hover:text-blue-600 transition">Contacto</a>
        </nav>
    
        <!-- Botón de inicio de sesión -->
        <button class="bg-white text-blue-500 px-5 py-2 rounded-lg shadow-md flex items-center gap-2 
                       hover:bg-gray-100 transition duration-300">
            <i class="fa-solid fa-right-from-bracket"></i>
            <span class="hidden sm:inline">Cerrar sesión</span>
        </button>
    </header>
