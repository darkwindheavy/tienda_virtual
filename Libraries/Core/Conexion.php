<?php
class Conexion {
    private $conect;

    public function __construct() {
        $this->conectar();
    }

    private function conectar() {
        $connectionString = "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=" . DB_CHARSET;
        try {
            $this->conect = new PDO($connectionString, DB_USER, DB_PASSWORD);
            $this->conect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            // echo "Conexión exitosa";
        } catch (PDOException $e) {
            $this->conect = null;
            error_log("Error de conexión: " . $e->getMessage());
            // Opcional: puedes lanzar una excepción para manejar el error a nivel de aplicación
            throw new Exception("Error de conexión a la base de datos");
        }
    }

    public function conect() {
        if ($this->conect === null) {
            $this->conectar();
        }
        return $this->conect;
    }
}



