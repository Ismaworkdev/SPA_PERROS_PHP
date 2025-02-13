<?php
require_once ('./../Basedatos.php');

class Empleado extends Basedatos {

    private $table;
    private $conexion;

    public function __construct() {
        $this->table = "EMPLEADOS";
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

    // OBTENER UN EMPLEADO POR SU DNI
    public function getUnEmpleado($dni) {
        try {
            $sql = "SELECT * FROM $this->table WHERE Dni = ?";
            $statement = $this->conexion->prepare($sql);
            $statement->execute([$dni]);
            return $statement->fetch(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            return ["error" => $e->getMessage()];
        }
    }

    // INSERTAR UN NUEVO EMPLEADO
    public function insertEmpleado($data) {
        try {
            $sql = "INSERT INTO $this->table (Dni, Email, Password, Rol, Nombre, Apellido1, Apellido2, Calle, Numero, Cp, Poblacion, Provincia, Tlfno, Profesion) 
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
            $statement = $this->conexion->prepare($sql);
            return $statement->execute(array_values($data));
        } catch (PDOException $e) {
            return ["error" => $e->getMessage()];
        }
    }

    // ACTUALIZAR UN EMPLEADO EXISTENTE
    public function updateEmpleado($data) {
        try {
            $sql = "UPDATE $this->table SET Email = ?, Password = ?, Rol = ?, Nombre = ?, Apellido1 = ?, Apellido2 = ?, Calle = ?, Numero = ?, Cp = ?, Poblacion = ?, Provincia = ?, Tlfno = ?, Profesion = ? WHERE Dni = ?";
            $statement = $this->conexion->prepare($sql);
            return $statement->execute(array_values($data));
        } catch (PDOException $e) {
            return ["error" => $e->getMessage()];
        }
    }

    // ELIMINAR UN EMPLEADO
    public function deleteEmpleado($dni) {
        try {
            $sql = "DELETE FROM $this->table WHERE Dni = ?";
            $statement = $this->conexion->prepare($sql);
            return $statement->execute([$dni]);
        } catch (PDOException $e) {
            return ["error" => $e->getMessage()];
        }
    }
}
?>