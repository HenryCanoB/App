<?php
require("Config/Config.php");
require_once("Helpers/Helpers.php");

$url = !empty($_GET["url"]) ? $_GET["url"] : "Home/Home";
$ArrayUrl = explode("/", $url);

$controller = $ArrayUrl[0];
$method = $ArrayUrl[0];
$params = '';

if (!empty($ArrayUrl[1])) {
    if ($ArrayUrl[1] != "") {
        $Method = $ArrayUrl[1];
    }
}

if (!empty($ArrayUrl[2])) {
    if ($ArrayUrl[2] != "") {
        for ($i = 2; $i < count($ArrayUrl); $i++) {
            $params .= $ArrayUrl[$i] . ",";
        }
        $params = trim($params, ",");
    }
}

require_once("Libraries/Core/Autoload.php");
require_once("Libraries/Core/Load.php");
