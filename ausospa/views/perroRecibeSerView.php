<?php

class PerroRecibeSerView
{

    public function eliminarPerroRecibeSer($allRegistros)
    {
?>
        <div id="divEliminarPerroRecibeSer">
            <form action="" id="formEliminarPerroRecibeSer">
                <select name="idRegistro" id="selectEliminarPerroRecibeSer">
                    <?php
                    foreach ($allRegistros as $registro) { ?>
                        <option value='<?php $registro->Sr_cod ?>'><?php $registro->Sr_cod + " - " + $registro->Sr_cod ?></option>
                    <?php } ?>
                </select>
                <button type="submit" id="btnEliminarPerroRecibeSer">Eliminar Registro</button>
            </form>
        </div>
<?php
    }


    public function mostrarRegistros($registros)
    {
        // Aquí podrías renderizar o mostrar los registros (puedes personalizarlo según tus necesidades)
        echo "<pre>";
        print_r($registros);
        echo "</pre>";
    }

    public function mostrarMensaje($mensaje)
    {
        // Aquí podrías renderizar o mostrar los registros (puedes personalizarlo según tus necesidades)
        echo "<pre>";
        echo $mensaje;
        echo "</pre>";
    }
}

?>