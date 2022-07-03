<?php

function Base_Url()
{
    return BASE_URL;
}

function Assets()
{
    return 'Views/assets';
}


function HeaderDashboard($data = "")
{
    $view_header = "Views/Template/header.php";
    require_once($view_header);
}
function SidebarDashboard($data = "")
{
    $view_sidebar = "Views/Template/sidebar.php";
    require_once($view_sidebar);
}
function FooterDashboard($data = "")
{
    $view_footer = "Views/Template/footer.php";
    require_once($view_footer);
}

function strClean($cadena)
{
    $cadena = preg_replace(['/\s*/', '/^\s|\s$/'], [' ', ''], $cadena);
    $cadena = trim($cadena);
    $cadena = stripslashes($cadena);
    $cadena = str_ireplace("<script>", "", $cadena);
    $cadena = str_ireplace("</script>", "", $cadena);
    $cadena = str_ireplace("<script src>", "", $cadena);
    $cadena = str_ireplace("<script type=>", "", $cadena);
    $cadena = str_ireplace("SELECT * FROM", "", $cadena);
    $cadena = str_ireplace("DELETE FROM", "", $cadena);
    $cadena = str_ireplace("INSERT INTO", "", $cadena);
    $cadena = str_ireplace("SELECT COUNT(*) FROM", "", $cadena);
    $cadena = str_ireplace("DROP TABLE", "", $cadena);
    $cadena = str_ireplace("OR '1'='1", "", $cadena);
    $cadena = str_ireplace('OR "1"="1', "", $cadena);
    $cadena = str_ireplace('OR 1´=´1', "", $cadena);
    $cadena = str_ireplace("IS NULL; --", "", $cadena);
    $cadena = str_ireplace("LIKE '", "", $cadena);
    $cadena = str_ireplace('LIKE "', "", $cadena);
    $cadena = str_ireplace("LIKE ´", "", $cadena);
    $cadena = str_ireplace("--", "", $cadena);
    $cadena = str_ireplace("^", "", $cadena);
    $cadena = str_ireplace("[", "", $cadena);
    $cadena = str_ireplace("]", "", $cadena);
    $cadena = str_ireplace("==", "", $cadena);
}
