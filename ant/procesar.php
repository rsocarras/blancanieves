<?php
include("config.php");
$c = new Buscador;
$c-> Conectar();
$q = $_GET['q'];
if ($q==null){
	print 'ingrese un dato a la busqueda';
	}else{
	$c->Buscar($q);
	}
?>