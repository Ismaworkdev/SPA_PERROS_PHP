<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="../../resources/css/style.css">
    <title>Crear Empleado</title>
</head>
<body>
    <div class="form__container">
        <form action="index.php" method="post">
            <h1 class="h1">Insertar Empleado</h1>
            <!-- Nombre -->
            <div class="label__section">
                <label for="nombre" class="">Nombre</label>
                <input type="text" class="" id="nombre" name="nombre" required>
            </div>
            <!-- Apellido 1 -->
            <div class="label__section">
                <label for="apellido1" class="">Primer Apellido</label>
                <input type="text" class="" id="apellido1" name="apellido1" required>
            </div>
            <!-- Apellido 2 -->
            <div class="label__section">
                <label for="apellido2" class="">Segundo Apellido</label>
                <input type="text" class="" id="apellido2" name="apellido2" required>
            </div>
            <!-- DNI -->
            <div class="label__section">
                <label for="dni" class="">DNI</label>
                <input type="text" class="" id="dni" name="dni" required>
            </div>
            <hr class="hr">
            <!-- EMAIL -->
            <div class="label__section">
                <label for="email" class="">Email</label>
                <input type="email" class="" id="email" name="email" required>
            </div>
            <!-- CONTRASEÑA -->
            <div class="label__section">
                <label for="password" class="">Contraseña</label>
                <input type="password" class="" id="password" name="password" required>
            </div>
            <hr class="hr">
            <!-- CALLE -->
            <div class="label__section">
                <label for="calle" class="">Teléfono</label>
                <input type="text" class="" id="calle" name="calle" required>
            </div>
             <!-- CP -->
             <div class="label__section">
                <label for="cp" class="">CP</label>
                <input type="text" class="" id="cp" name="cp" required>
            </div>
             <!-- POBLACION -->
             <div class="label__section">
                <label for="poblacion" class="">Poblacion</label>
                <input type="text" class="" id="poblacions" name="poblacions" required>
            </div>
             <!-- PROVINCIA -->
             <div class="label__section">
                <label for="provincia" class="">Provincia</label>
                <input type="text" class="" id="provincia" name="provincia" required>
            </div>
             <!-- TELEFONO -->
             <div class="label__section">
                <label for="telefono" class="">Telefono</label>
                <input type="text" class="" id="telefono" name="telefono" required>
            </div>
            <hr class="hr">
            <!-- PROFESION -->
            <div class="label__section">
                <label for="profesion" class="">Profesion</label>
                <select class="" id="profesion" name="profesion" required>
                    <option value="empleado">Empleado</option>
                    <option value="auxiliar">Auxiliar</option>
                    <option value="admin">Administrador</option>
                </select>
            </div>
            <!-- ROL -->
            <div class="label__section">
                <label for="rol" class="">Profesion</label>
                <select class="" id="rol" name="rol" required>
                    <option value="estilista">Estilista</option>
                    <option value="nutricionista">Nutricionista</option>
                    <option value="auxiliar">Auxiliar</option>
                    <option value="attcliente">ATT.Cliente</option>
                </select>
            </div>
            <button type="submit" name="accion" class="button" value="insertarEmpleado">Insertar Empleado</button>
        </form>
    </div>

</body>
</html>