<?php
// require_once(__DIR__.'/../controllers/WebController.php');
?>
    <?php
    include_once(__DIR__.'/Header.php');
    ?>

    <main class="p-4 flex justify-center align-center gap-4">
        <?php
            // $webController=new WebController();
            // listar_clientes();
        ?>

        <!-- Formulario Añadir Cliente -->
        <form method="POST" class="flex flex-col gap-4 w-full max-w-md mx-auto p-4 bg-white shadow-lg rounded-lg">
            <h2 class="font-bold text-xl text-center text-blue-800">Añadir nuevo cliente</h2>
            <input class="px-2 rounded-md border-2 border-blue-500 focus:outline-0 focus:border-blue-800 focus:bg-gray-100" placeholder="DNI" type="text" name="post_dni" id="dni" required>
            <input class="px-2 rounded-md border-2 border-blue-500 focus:outline-0 focus:border-blue-800 focus:bg-gray-100" placeholder="NOMBRE" type="text" name="post_nombre" id="nombre" required>
            <input class="px-2 rounded-md border-2 border-blue-500 focus:outline-0 focus:border-blue-800 focus:bg-gray-100" placeholder="PRIMER APELLIDO" type="text" name="post_apellido1" id="apellido1" required>
            <input class="px-2 rounded-md border-2 border-blue-500 focus:outline-0 focus:border-blue-800 focus:bg-gray-100" placeholder="SEGUNDO APELLIDO" type="text" name="post_apellido2" id="apellido2" required>
            <input class="px-2 rounded-md border-2 border-blue-500 focus:outline-0 focus:border-blue-800 focus:bg-gray-100" placeholder="DIRECCIÓN" type="text" name="post_direccion" id="direccion" required>
            <input class="px-2 rounded-md border-2 border-blue-500 focus:outline-0 focus:border-blue-800 focus:bg-gray-100" placeholder="TELÉFONO" type="text" name="post_telefono" id="telefono" required>
            <button class="w-[150px] h-[50px] mx-auto shadow-lg rounded-lg hover:bg-gray-100" type="submit">Añadir</button>
        </form>

        <!-- Formulario Eliminar Cliente -->
        <form method="DELETE" class="flex flex-col gap-4 w-full max-w-md mx-auto p-4 bg-white shadow-lg rounded-lg">
            <h2 class="font-bold text-xl text-center text-blue-800">Eliminar cliente</h2>
            <input class="px-2 rounded-md border-2 border-blue-500 focus:outline-0 focus:border-blue-800 focus:bg-gray-100" placeholder="DNI" type="text" name="delete_dni" id="dni" required>
            <button class="w-[150px] h-[50px] mx-auto shadow-lg rounded-lg hover:bg-gray-100" type="submit">Eliminar</button>
        </form>
    </main>
    
</body>
</html>