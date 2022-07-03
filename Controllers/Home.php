<?php
class Home extends Controllers
{
    public function __construct()
    {
        parent::__construct();
        //$this->Listar();
    }
    /*public function Home($params)
    {
        $data['dato'] = "1";
        $this->views->getView($this, "Home", $data);
    }*/

    public function Home()
    {
        $datos = array();
        $rsql = $this->model->Listar("L", 0);
        if ($rsql) {
            while ($row = $rsql->fetch(PDO::FETCH_NAMED)) {
                array_push($datos, array(
                    "cod" => $row["codigo_cat"],
                    "nomcat" => $row["nombre_cat"],
                ));
            }
        } else {
            $datos = "";
        }
        print_r(json_encode($datos));
    }
}
