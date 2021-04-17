<?php
if (isset($_GET['menu'])) {
    if ($_GET['menu'] == 'index') {
        include_once("../Vista/ModuloAdmin/index.php");
    }
    if ($_GET['menu'] == 'charts') {
        include_once("../Vista/ModuloAdmin/charts.php");
    }
    
} else {
    include_once("../Vista/ModuloAdmin/index.php");
}
?>