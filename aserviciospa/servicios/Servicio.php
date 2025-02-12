
<?php
class Servicio extends Basedatos {

    private $table;
    private $conexion;

    public function __construct() {
        $this->table = "SERVICIOS";
        $this->conexion = $this->getConexion();
    }

    // Obtener todos los servicios
    public function getAll() {
        $objetosdep = array();
        try {
            $sql = "SELECT * FROM $this->table";
            $statement = $this->conexion->query($sql);
            $registros = $statement->fetchAll(PDO::FETCH_ASSOC);
            $statement = null;
            return $registros;
        } catch (PDOException $e) {
            return "ERROR AL CARGAR.<br>" . $e->getMessage();
        }
    }

    // Obtener un servicio por su ID
    public function getUnServicio($id) {
        try {
            $sql = "SELECT * FROM $this->table WHERE CODIGO=?";
            $sentencia = $this->conexion->prepare($sql);
            $sentencia->bindParam(1, $id);
            $sentencia->execute();
            $row = $sentencia->fetch(PDO::FETCH_ASSOC);
            if ($row) {
                return $row;
            }
            return "SIN DATOS";
        } catch (PDOException $e) {
            return "ERROR AL CARGAR.<br>" . $e->getMessage();
        }
    }

    // Crear un nuevo servicio
    public function createServicio($codigo, $nombre, $descripcion, $precio) {
        try {
            $sql = "INSERT INTO $this->table (CODIGO, NOMBRE, DESCRIPCION, PRECIO) VALUES (?, ?, ?, ?)";
            $sentencia = $this->conexion->prepare($sql);
            $sentencia->bindParam(1, $codigo);
            $sentencia->bindParam(2, $nombre);
            $sentencia->bindParam(3, $descripcion);
            $sentencia->bindParam(4, $precio);
            $sentencia->execute();
            return "Servicio creado exitosamente";
        } catch (PDOException $e) {
            return "ERROR AL CREAR EL SERVICIO.<br>" . $e->getMessage();
        }
    }

    // Actualizar un servicio existente
    public function updateServicio($codigo, $nombre, $descripcion, $precio) {
        try {
            $sql = "UPDATE $this->table SET NOMBRE=?, DESCRIPCION=?, PRECIO=? WHERE CODIGO=?";
            $sentencia = $this->conexion->prepare($sql);
            $sentencia->bindParam(1, $nombre);
            $sentencia->bindParam(2, $descripcion);
            $sentencia->bindParam(3, $precio);
            $sentencia->bindParam(4, $codigo);
            $sentencia->execute();
            return "Servicio actualizado exitosamente";
        } catch (PDOException $e) {
            return "ERROR AL ACTUALIZAR EL SERVICIO.<br>" . $e->getMessage();
        }
    }

    // Eliminar un servicio
    public function deleteServicio($codigo) {
        try {
            $sql = "DELETE FROM $this->table WHERE CODIGO=?";
            $sentencia = $this->conexion->prepare($sql);
            $sentencia->bindParam(1, $codigo);
            $sentencia->execute();
            return "Servicio eliminado exitosamente";
        } catch (PDOException $e) {
            return "ERROR AL ELIMINAR EL SERVICIO.<br>" . $e->getMessage();
        }
    }
}


?>
