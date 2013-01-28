<?php
include("config.php");
$c = new Buscador;
$c-> Conectar();
$id = $_GET['q'];
$c -> Eliminar($id);
?>