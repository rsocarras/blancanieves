<?php
include("config.php");
$c = new Buscador;
$c-> Conectar();


	$ci = $_GET['ci'];
	$ui = $_GET['ui'];
	$fi = $_GET['fi'];
	$ff = $_GET['ff'];
	$ti = $_GET['ti'];
	$em = $_GET['em'];
	$co = $_GET['co'];
	$di = $_GET['di'];
	$va = $_GET['va'];
	$es = $_GET['es'];
	$ob = $_GET['bo'];
	

switch($tabla){
	case 1;
	$usuario = $_GET['n'];
	$nivel = $_GET['a'];
	$query = "UPDATE oul_usuarios SET 	usuario='$usuario',
										nivel_acceso =  '$nivel' 
			WHERE ID = '$id'";
			
			
	$query = "INSERT INTO `rsocca_medtronics`.`oul_contrato` (`contratoID`, `contratoN`, `estadoID`, `tipoID`, `usuarioID`, `terceroID`, `empresaID`, `contratanteID`, `shipping_address`, `objeto`, `start_date`, `end_date`, `mod_date`, `valor`, `userID`, `fecha_c`, `fecha_m`, `user_c`, `user_m`) VALUES 
			(NULL, '$c1', '$es', '$ti', '1', '1', '1', '1', 'Calle tal con Tal', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum', '2012-08-29 00:00:00', '2012-08-31 00:00:00', '2012-08-29 00:00:00', '3000000', '1', '2012-08-29 00:00:00', '2012-08-29 00:00:00', '1', '1');";
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