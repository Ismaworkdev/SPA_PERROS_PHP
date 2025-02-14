<?php
require_once ('./../Basedatos.php');

class Cliente extends Basedatos {

    private $table;
    private $conexion;

    public function __construct() {
        $this->table = "CLIENTES";
        $this->conexion = $this->getConexion();
    }

    // OBTENER TODOS LOS CLIENTES
    public function getAll() {
        try {
            $sql = "SELECT * FROM $this->table";
            $statement = $this->conexion->query($sql);
            return $statement->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            return ["error" => $e->getMessage()];
        }
    }

    // OBTENER UN CLIENTE POR SU DNI
    public function getUnCliente($dni) {
        try {
            $sql = "SELECT * FROM $this->table WHERE Dni = ?";
            $statement = $this->conexion->prepare($sql);
            $statement->execute([$dni]);
            return $statement->fetch(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            return ["error" => $e->getMessage()];
        }
    }

    // INSERTAR UN NUEVO CLIENTE
    public function insertCliente($data) {
        try {
            $sql = "INSERT INTO $this->table (Dni, Nombre, Apellido1, Apellido2, Direccion, Tlfno) 
            VALUES (?, ?, ?, ?, ?, ?)";
            $statement = $this->conexion->prepare($sql);
            return $statement->execute(array_values($data));
        } catch (PDOException $e) {
            return ["error" => $e->getMessage()];
        }
    }

    // ACTUALIZAR UN CLIENTE EXISTENTE
    public function updateCliente($data) {
        try {
            $sql = "UPDATE $this->table SET Nombre = ?, Apellido1 = ?, Apellido2 = ?, Direccion = ?, Tlfno = ? WHERE Dni = ?";
            $statement = $this->conexion->prepare($sql);
            return $statement->execute(array_values($data));
        } catch (PDOException $e) {
            return ["error" => $e->getMessage()];
        }
    }

     // ELIMINAR UN CLIENTE
     public function deleteCliente($dni) {
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