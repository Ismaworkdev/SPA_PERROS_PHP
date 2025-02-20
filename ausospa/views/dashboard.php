<?php
include_once(__DIR__ . '/Header.php');
?>

<!-- Article Clientes -->
<main class="w-full max-w-[900px] pb-10 flex gap-4 mx-auto justify-center align-center flex-wrap">
    <article class="flex flex-col justify-center align-center text-center gap-4 w-[100%] max-w-[400px] mt-4 bg-blue-100 rounded-lg p-4">

        <h1 class="text-center font-extrabold text-xl">Clientes</h1>

        <p class="w-[200px] mx-auto bg-blue-300 rounded-lg hover:bg-blue-500"><a href="./ViewsCliente/AniadirCliente.php">Añadir Cliente</a></p>

        <p class="w-[200px] mx-auto bg-blue-300 rounded-lg hover:bg-blue-500"><a href="./ViewsCliente/EliminarCliente.php">Eliminar Cliente</a></p>

    </article>

    <article class="flex flex-col justify-center align-center text-center gap-4 w-[100%] max-w-[400px] mt-4 bg-blue-100 rounded-lg p-4">
        
        <h1 class="text-center font-extrabold text-xl">Perros</h1>

        <p class="w-[200px] mx-auto bg-blue-300 rounded-lg hover:bg-blue-500"><a href="./ViewsPerro/InsertarPerroView.php">Añadir Perro</a></p>

        <p class="w-[200px] mx-auto bg-blue-300 rounded-lg hover:bg-blue-500"><a href="./ViewsPerro/EliminarPerroView.php">Eliminar Perro</a></p>

    </article>

    <article class="flex flex-col justify-center align-center text-center gap-4 w-[100%] max-w-[400px] mt-4 bg-blue-100 rounded-lg p-4">
        
        <h1 class="text-center font-extrabold text-xl">Servicios</h1>

        <p class="w-[200px] mx-auto bg-blue-300 rounded-lg hover:bg-blue-500"><a href="./ViewsServicios/AniadirServicio.php">Añadir Servicio</a></p>

        <p class="w-[200px] mx-auto bg-blue-300 rounded-lg hover:bg-blue-500"><a href="./ViewsServicios/EliminarServicio.php">Eliminar Servicio</a></p>

    </article>

    <article class="flex flex-col justify-center align-center text-center gap-4 w-[100%] max-w-[400px] mt-4 bg-blue-100 rounded-lg p-4">
        
        <h1 class="text-center font-extrabold text-xl">Servicios Realizados</h1>

        <p class="w-[200px] mx-auto bg-blue-300 rounded-lg hover:bg-blue-500"><a href="./ViewsPerroRecibeServicio/AniadirServicioRealizado.php">Añadir Servicio Realizado</a></p>

        <p class="w-[200px] mx-auto bg-blue-300 rounded-lg hover:bg-blue-500"><a href="./ViewsPerroRecibeServicio/AniadirServicioRealizado.php">Eliminar Servicio Realizado</a></p>

    </article>
</main>

<?php
include_once(__DIR__ . '/Footer.php');
?>