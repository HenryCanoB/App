<?php
class BaseDatos extends Conexion
{

    private $cnx;
    private $query;
    private $arregloValores;

    function __construct()
    {
        $this->cnx = new Conexion();
        $this->cnx = $this->cnx->Conectar();
    }

    public function Ejecutar($sql, $parametros)
    {
        try {
            $this->query = $sql;
            $this->arregloValores = $parametros;
            $pre = $this->cnx->prepare($this->query);
            $pre->execute($this->arregloValores);
            return $pre;
        } catch (Exception $e) {
            echo 'error: ' . $e->getMessage();
        }
    }
}
