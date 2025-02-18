<?php
require_once ('./../Basedatos.php');

class Cliente extends Basedatos {

    private $table;
    private $conexion;

    public function __construct() {
        $this->table = "CLIENTES";
        $this->conexion = $this->getConexion();
    }
    
    //B1. Método para insertar un nuevo CLIENTE
    public function insertCliente($data) {
        try {
            // Verificar si el DNI ya está registrado
            $sql_check = "SELECT COUNT(*) FROM $this->table WHERE Dni = ?";
            $stmt_check = $this->conexion->prepare($sql_check);
            $stmt_check->execute([$data['Dni']]);
            if ($stmt_check->fetchColumn() > 0) {
                return ["error" => "El Cliente ya está dado de alta"];
            }

            // Insertar el nuevo CLIENTE
            $sql = "INSERT INTO $this->table (Dni, Nombre, Apellido1, Apellido2, Direccion, Tlfno)
            VALUES (?,?, ?, ?, ?, ?)";
            $statement = $this->conexion->prepare($sql);

            // Mensajes de éxito o error
            if ($statement->execute(array_values($data))) {
                return ["success" => "Cliente DNI: {$data['Dni']} insertado correctamente"];
            } else {
                return ["error" => "Error al insertar el cliente"];
            }
        } catch (PDOException $e) {
            return ["error" => $e->getMessage()];
        }
    }

    //B6. Método para borrar un Cliente
    public function deleteCliente($dni) {
        try {
            $sql = "DELETE FROM $this->table WHERE Dni = ?";
            $statement = $this->conexion->prepare($sql);

            // Mensajes de éxito o error
            if ($statement->execute([$dni])) {
                return ["success" => "Cliente DNI: $dni eliminado correctamente"];
            } else {
                return ["error" => "Error al eliminar el cliente"];
            }
        } catch (PDOException $e) {
            return ["error" => $e->getMessage()];
        }
    }


    

    
}
?>