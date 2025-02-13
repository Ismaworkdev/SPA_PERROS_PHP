<?php
require_once ('./../Basedatos.php');

class Empleado extends Basedatos {

    private $table;
    private $conexion;

    public function __construct() {
        $this->table = "EMPLEADOS"; // Tabla en la BD
        $this->conexion = $this->getConexion();
    }

    // OBTENER TODOS LOS EMPLEADOS
    public function getAll() {
        try {
            $sql = "SELECT * FROM $this->table";
            $statement = $this->conexion->query($sql);
            return $statement->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            return ["error" => $e->getMessage()];
        }
    }

    // OBTENER EMPLEADO POR ID
    public function getUnEmpleado($id) {
        try {
            $sql = "SELECT * FROM $this->table WHERE id = ?";
            $statement = $this->conexion->prepare($sql);
            $statement->execute([$id]);
            return $statement->fetch(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            return ["error" => $e->getMessage()];
        }
    }

    // CREAR NUEVO EMPLEADO
    public function insertEmpleado($nombre, $cargo, $salario) {
        try {
            $sql = "INSERT INTO $this->table (nombre, cargo, salario) VALUES (?, ?, ?)";
            $statement = $this->conexion->prepare($sql);
            return $statement->execute([$nombre, $cargo, $salario]);
        } catch (PDOException $e) {
            return ["error" => $e->getMessage()];
        }
    }

    // ACTUALIZAR EMPLEADO
    public function updateEmpleado($id, $nombre, $cargo, $salario) {
        try {
            $sql = "UPDATE $this->table SET nombre = ?, cargo = ?, salario = ? WHERE id = ?";
            $statement = $this->conexion->prepare($sql);
            return $statement->execute([$nombre, $cargo, $salario, $id]);
        } catch (PDOException $e) {
            return ["error" => $e->getMessage()];
        }
    }

    // ELIMINAR EMPLEADO
    public function deleteEmpleado($id) {
        try {
            $sql = "DELETE FROM $this->table WHERE id = ?";
            $statement = $this->conexion->prepare($sql);
            return $statement->execute([$id]);
        } catch (PDOException $e) {
            return ["error" => $e->getMessage()];
        }
    }
}
?>
