<?php

class Usuarios extends Controllers
{
    public function __construct()
    {
        parent::__construct();
    }

    public function Usuarios()
    {
        $data["page_name"] = "Usuarios";
        $this->views->getView($this, "usuarios", $data);
    }
}
