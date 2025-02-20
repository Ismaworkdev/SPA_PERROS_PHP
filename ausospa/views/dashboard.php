<?php
include_once(__DIR__ . '/Header.php');
?>

<!-- Article Clientes -->
<main class="w-full pb-10 flex gap-4 justify-center align-center flex-wrap">
    <article class="flex flex-col justify-center align-center text-center gap-4 w-[100%] max-w-[400px] mt-4 bg-blue-100 rounded-lg p-4">

        <h1 class="text-center font-extrabold text-xl">Clientes</h1>

        <p class="w-[200px] mx-auto bg-blue-300 rounded-lg hover:bg-blue-500"><a href="./AniadirCliente.php">Añadir Cliente</a></p>

        <p class="w-[200px] mx-auto bg-blue-300 rounded-lg hover:bg-blue-500"><a href="./EliminarCliente.php">Eliminar Cliente</a></p>

    </article>

    <article class="flex flex-col justify-center align-center text-center gap-4 w-[100%] max-w-[400px] mt-4 bg-blue-100 rounded-lg p-4">
        
        <h1 class="text-center font-extrabold text-xl">Perros</h1>

        <p class="w-[200px] mx-auto bg-blue-300 rounded-lg hover:bg-blue-500"><a href="./AniadirCliente.php">Añadir Perro</a></p>

        <p class="w-[200px] mx-auto bg-blue-300 rounded-lg hover:bg-blue-500"><a href="./EliminarCliente.php">Eliminar Perro</a></p>

    </article>

    <article class="flex flex-col justify-center align-center text-center gap-4 w-[100%] max-w-[400px] mt-4 bg-blue-100 rounded-lg p-4">
        
        <h1 class="text-center font-extrabold text-xl">Servicios</h1>

        <p class="w-[200px] mx-auto bg-blue-300 rounded-lg hover:bg-blue-500"><a href="./AniadirCliente.php">Añadir Servicio</a></p>

        <p class="w-[200px] mx-auto bg-blue-300 rounded-lg hover:bg-blue-500"><a href="./EliminarCliente.php">Eliminar Servicio</a></p>

    </article>
</main>

<?php
include_once(__DIR__ . '/Footer.php');
?>