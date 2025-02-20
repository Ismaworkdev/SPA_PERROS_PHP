<?php
require_once 'Empleado.php';
require_once 'empleadoView.php';

class EmpleadoController {
    private $empleado;
    private $view;

    public function __construct(){
        $this->empleado = new Empleado();
        $this->view = new EmpleadoView();
    }
    
    //POST -> crear un registro
    public function crearPerroRecibeSer($dni, $email, $password, $rol, $apellido1, $apellido2, $calle, $numero, $cp, $poblacion, $provincia, $tlfno, $profesion)
    {

        // Los datos que deseas enviar en el cuerpo de la solicitud (en formato JSON)
        $data = array(
            'dni' => $dni,
            'email' => $email,
            'rol' => $rol,
            'password' => $password,
            'apellido1' => $apellido1,
            'apellido2' => $apellido2,
            'calle' => $calle,
            'numero' => $numero,
            'cp' => $cp,
            'poblacion' => $poblacion,
            'provincia' => $provincia,
            'tlfno' => $tlfno,
            'profesion' => $profesion
        );

        // Inicializa cURL
        $ch = curl_init('http://localhost/SPA_PERROS_PHP/aserviciospa/empleados');

        // Configura las opciones de cURL
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); // Retorna la respuesta como string
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json')); // Establece el tipo de contenido como JSON
        curl_setopt($ch, CURLOPT_POST, true); // Especifica que se trata de una solicitud POST
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data)); // Convierte el array a JSON y lo envía en el cuerpo

        // Ejecuta la petición y guarda la respuesta
        $response = curl_exec($ch);

        // Verifica si hubo algún error
        if ($response === false) {
            echo 'Error en la petición: ' . curl_error($ch);
        } else {
            // Si la respuesta es exitosa, muestra el contenido
            echo 'Respuesta del servidor: ' . $response;
        }

        // Cierra la sesión de cURL
        curl_close($ch);

        // $this->view->mostrarMensaje($response);
    }

}
?>
