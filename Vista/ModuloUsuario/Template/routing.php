<?php
if (isset($_GET['menu'])) {
    if ($_GET['menu'] == 'index') {
        include_once("../Vista/ModuloUsuario/index.php");
    }
    
} else {
    include_once("../Vista/ModuloUsuario/index.php");
}
?>