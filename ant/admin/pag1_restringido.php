<?
//  Autentificator
//  Gesti�n de Usuarios PHP+Mysql+sesiones
//  by Pedro Noves V. (Cluster)
//  clus@hotpop.com
// ------------------------------------------
require("aut_verifica.inc.php");
$nivel_acceso=4; // Nivel de acceso para esta p�gina.
// se chequea si el usuario tiene un nivel inferior
// al del nivel de acceso definido para esta p�gina.
// Si no es correcto, se mada a la p�gina que lo llamo con
// la variable de $error_login definida con el n� de error segun el array de
// aut_mensaje_error.inc.php
if ($nivel_acceso <= $_SESSION['usuario_nivel']){
header ("Location: $redir?error_login=5");
exit;
}
?>
<html>
<head>
<title>P�gina con acceso restringido!</title>
</head>
<body>
<p>Acceso Autorizado:</p>
Esto es una p�gina con acceso restringido.<br><br>
Nombre de la sesion => <? echo session_name(); ?> <br>
Usuario ID (referencia) => <? echo $_SESSION['usuario_id'] ?><br>
Usuario login (nombre) => <? echo $_SESSION['usuario_login'] ?><br>
Usuario Nivel de Acceso => <? echo $_SESSION['usuario_nivel'] ?><br><br>
<br>
<a href="aut_gestion_usuarios.php">Gestionar usuarios</a>
<br><br>
<a href="aut_logout.php">Salir zona restringida</a>
</body>
</html>
