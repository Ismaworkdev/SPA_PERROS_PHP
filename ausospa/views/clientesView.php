<?php
// require_once(__DIR__.'/../controllers/WebController.php');
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | SpaRibera</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./../resources/css/style.css">
</head>
<body>
    <?php
    include_once(__DIR__.'/Header.php');
    ?>

    <main class="">
        <?php
            // listar_clientes();
        ?>

        <!-- Formulario Añadir Cliente -->
        <form method="POST" class="flex-col">
            <h2 class="font-bold text-xl text-center text-blue-800">Añadir nuevo cliente</h2>
            <input placeholder="DNI" type="text" name="dni" id="dni">
            <input placeholder="NOMBRE" type="text" name="nombre" id="nombre">
            <input placeholder="PRIMER APELLIDO" type="text" name="apellido1" id="apellido1">
            <input placeholder="SEGUNDO APELLIDO" type="text" name="apellido2" id="apellido2">
            <input placeholder="DIRECCIÓN" type="text" name="direccion" id="direccion">
            <input placeholder="TELÉFONO" type="text" name="telefono" id="telefono">
            <button type="submit">Añadir</button>
        </form>

        <!-- Formulario Eliminar Cliente -->
        <form method="POST" class="">
            <h2>Eliminar cliente</h2>
        </form>
    </main>
    
</body>
</html>