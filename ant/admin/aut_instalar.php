<html>
<head>
<title>Instalaci�n Autentificator - Gesti�n Usuarios PHP+Mysql+sesiones by Cluster</title>
</head>
<body>
<p>Instalaci�n de Autentificator - Gestor de Usuarios by Cluster.<p>
<?
$sql_db="autentica";     // Base de datos que se usar�.
$sql_tabla="usuario";
require ("aut_config.inc.php");

if ($sql_db=="" or $sql_tabla==""){
die ("ERROR!!: Revise los datos de conexi�n.<br>El nombre de la base de datos o el nombre de la tabla no estan definidos.<br>Edite el archivo aut_config.inc.php y verifique los datos.");
}

$Sql="CREATE TABLE $sql_tabla (
  ID smallint(6) unsigned NOT NULL auto_increment,
  usuario tinytext NOT NULL,
  pass tinytext NOT NULL,
  nivel_acceso smallint(4) unsigned NOT NULL default '0',
  PRIMARY KEY  (ID),
  UNIQUE KEY ID (ID)
) TYPE=MyISAM PACK_KEYS=1;";

$Sql_usuario="INSERT INTO $sql_tabla VALUES (1, 'Admin', '21232f297a57a5a743894a0e4a801fc3', 0);";

$db_conexion= mysql_connect("$sql_host", "$sql_usuario", "$sql_pass") or die(header ("No se pudo conectar con Base de datos"));
mysql_select_db("$sql_db");
mysql_query($Sql) or die ("ERROR!!: Ha ocurrido un error en la instalaci�n:<br>Mysql dice: ".mysql_error()."<br><br>nota: este script no instala la Base de datos, solo la tabla necesaria.");
mysql_query($Sql_usuario) or die ("ERROR!!: Ha ocurrido un error en la instalaci�n:<br>Mysql dice: ".mysql_error());
echo "Instalaci�n satisfactoria<br><br>";
echo "Se ha creado el usuario:<br>";
echo "usuario: Admin<br>";
echo "password: admin<br>";
echo "Nivel Acceso: 0<br><br><br>";
echo "<a href='gestion_usuarios.php'>Click aqu� para Gestionar Usuarios</a>"

?>
</body>
</html>
