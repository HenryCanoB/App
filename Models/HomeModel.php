<?php
class HomeModel extends BaseDatos
{
    public function __construct()
    {
        parent::__construct();
    }
    public function Listar($tipo, $obj)
    {
        $sql = "call ListarCategoria(:tipo,:codigo);";
        $parametros = array(
            ':tipo' => $tipo,
            ':codigo' => 0
        );
        return $this->Ejecutar($sql, $parametros);
    }
}
