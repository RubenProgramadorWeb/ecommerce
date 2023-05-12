<?php
// Clase para realizar la conexion con la base de datos
class Database
{
    // Declaro las variable de configuracion como private por seguridad. Asi solo pueden ser usados por funciones
    // de la misma clase.
    private $host; // Direccion del servidor. En este caso usaremos localhost.
    private $user; // Usuario de la base de datos. En mi caso usare root
    private $password; // Password de conexion.
    private $dbname; // Nombre de la base de la base de datos.

    private $conn;
    // En el constructor introduzco de forma automatica en la declaracion de la clase los valores de conexion de 
    // la base de datos.
    public function __construct()
    {
        $this->host = 'localhost';
        $this->user = 'root';
        $this->password = '';
        $this->dbname = 'siia';
        $this->conn = null;
    }
    // Funcion de conexion 
    public function Connect()
    {
        $this->conn = new mysqli($this->host, $this->user, $this->password, $this->dbname, 3307);
        if ($this->conn->connect_error) {
            die("Conexion fallida");
        }
        return $this->conn;
    }

    public function __destruct()
    {
        // $conn->close();
        $this->conn->close();
    }

}
?>