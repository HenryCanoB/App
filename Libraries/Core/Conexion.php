<?php

class Conexion
{
    private $connect;

    public function __construct()
    {
        $cadena = DB_MANEJADOR . ":host=" . DB_HOST . ";dbname=" . DB_NAME;
        try {
            $this->connect = new PDO($cadena, DB_USER, DB_PASSWORD);
            $this->connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            $this->connect = 'Error de conexión';
            echo 'Falló la conexión: ' . $e->getMessage();
        }
    }

    public function Conectar()
    {
        return $this->connect;
    }
}
