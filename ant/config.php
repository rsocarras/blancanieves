<?php
class Buscador {
	var $host='localhost';
	var $user='rsocca_medtronic';
	var $pass='0iZoRzS2SU5i';
	var $db='rsocca_medtronics';
	var $c_Servidor='Se conecto con el servidor';
	var $i_Servidor='No se conecto con el servidor';
	var $c_DB='Se selecciono base de datos';
	var $i_DB='No se selecciono base de datos';
	//var $c_Servidor='Se conecto con el servidor';

	function Conectar(){
	if (!@mysql_connect($this->host,$this->user,$this->pass)){
			print $this->i_Servidor;
		}else{
			//print $this->c_Servidor;
			if (!@mysql_select_db($this->db)){
				print $this->i_DB;
			}
		}
	
	}
	
	function Buscar($q){
	$query = mysql_query ("SELECT * FROM oul_usuarios WHERE usuario LIKE '%$q%'");
	if(mysql_num_rows($query)<=0){
	 print 'No se encontro ningun resultado';
		}else {
		print	'<table width="200" border="1">
			  <tr>
			    <td>ID</td>
			    <td>User</td>
			    <td>Pass</td>
			    <td>Acciones</td>
			  </tr>';
			while ($row = mysql_fetch_assoc($query)){
				print '	 <tr>
					    <td>'.$row['ID'].'</td>
					    <td>'.$row['usuario'].'</td>
					    <td>'.$row['nivel_acceso'].'</td>
					    <td><span style="cursor:pointer;" onclick="Editar('.$row['ID'].');">Editar</span><br><span style="cursor:pointer;" onclick="Confirmar('.$row['ID'].');">Eliminar</span>
					    <span style="cursor:pointer;" onclick="Contrato();">Contrato</span></td>
					 </tr>';
			}
			print	'</table>';
		}
		mysql_close();
	}
	
	function Eliminar($id){ 

		if (mysql_query("DELETE FROM oul_usuarios WHERE id = '$id'")){
			print 'Se ha eliminado el dato'; 
		}
		mysql_close();
	}
	
	function ContratoNum(){
			$rs = mysql_query("SELECT MAX(contratoID) AS contratoID FROM oul_contrato");
				if ($row = mysql_fetch_row($rs)) {
						$id = trim($row[0])+1;
						$hoy = date("Ym");  
						print  "ND". $hoy."-".$id;
				}
	 mysql_close();
	}
	
	function Tipo(){
	$query = mysql_query ("SELECT * FROM oul_contratos_tipo");
	if(mysql_num_rows($query)<=0){
	 print 'No se encontro ningun resultado';
		}else {
		print	'ninguno';
			while ($row = mysql_fetch_assoc($query)){
				print '<option value="'.$row['tipoID'].'">'.$row['tipo'].'</option>';
			}
		}
		mysql_close();
	}
	
	function Tercero(){
	$query = mysql_query ("SELECT terceroID,nombre FROM rsocca_medtronics.oul_tercero;");
	if(mysql_num_rows($query)<=0){
	 print 'No se encontro ningun resultado';
		}else {
		print	'ninguno';
			while ($row = mysql_fetch_assoc($query)){
				print '<option value="'.$row['terceroID'].'">'.$row['nombre'].'</option>';
			}
		}
		mysql_close();
	}
	
	function Estado(){
	$query = mysql_query ("SELECT * FROM rsocca_medtronics.oul_contratos_estado;");
	if(mysql_num_rows($query)<=0){
	 print 'No se encontro ningun resultado';
		}else {
		print	'ninguno';
			while ($row = mysql_fetch_assoc($query)){
				print '<option value="'.$row['estadoID'].'">'.$row['estado'].'</option>';
			}
		}
		mysql_close();
	}

	
}
?>