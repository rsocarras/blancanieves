<?php
include("config.php");
$c = new Buscador;
$c-> Conectar();
$id = $_GET['q'];
$tabla = $_GET['tabla'];


switch($tabla){
	case 1;
	$usuario = $_GET['n'];
	$nivel = $_GET['a'];
	$query = "UPDATE oul_usuarios SET 	usuario='$usuario',
										nivel_acceso =  '$nivel' 
			WHERE ID = '$id'";
	print $id;
	$update = mysql_query($query);
	if ($update){
		print 'Se actualizo';
		}else{
		 print 'Se error';
		}
		break;
	case 2;
	
	
	break;	
}
?>