<?php
//NOS CONECAMOS A LA BASE DE DATOS
//REMPLAZEN SUS VALOS POR LOS MIOS
mysql_connect("localhost","rsocca_medtronic","0iZoRzS2SU5i") or die("No se pudo conectar a la base de datos");

//SELECCIONAMOS LA BASE DE DATOS CON LA CUAL VAMOS A TRABAJAR CAMBIEN EL VALOR POR LA SUYA
mysql_select_db("rsocca_medtronics");

//CONSTRUIMOS EL QUERY PARA OBTENER LOS ARCHIVOS
$qry="select 
		docs.*,
		CASE docs.tipo 
			WHEN 'image/png' then 
				'image'
			WHEN 'image/jpg' then 
				'image'
			WHEN 'image/gif' then 
				'image'
			WHEN 'image/jpeg' then 
				'image'
			ELSE 
				'file' 
		END as display
	from oul_documentos AS docs";

//EJECUTAMOS LA CONSULTA
$res=mysql_query($qry) or die("Query: $qry ".mysql_error());

//RECORREMOS LA CONSULTA
while ($obj=mysql_fetch_object($res)) {
	//SI EL TIPO DE DOCUMENTO ES UMAGEN LA MOSTRAMOS SI NO SOLO HACEMOS EL LINK
	switch ($obj->display){
		case "image":
			echo "<div>
					<a href='getfile.php?id_documento={$obj->id_documento}'>
						<img src='getfile.php?id_documento={$obj->id_documento}' alt='$obj->titulo' />
					</a>
				</div><hr />";
			break;
		case "file":
			echo "<div>
					<a href='getfile.php?id_documento={$obj->id_documento}'>$obj->titulo</a>
				</div><hr />";
			break;			
	}
	
}

//CERRAMOS LA CONEXION
mysql_close();
?>