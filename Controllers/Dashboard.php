<?php

class Dashboard extends Controllers
{
    public function __construct()
    {
        parent::__construct();
    }
    public function dashboard()
    {
        $data["page_name"] = "Dashboard";
        $this->views->getView($this, "dashboard", $data);
    }
}
