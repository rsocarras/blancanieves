<?
//  Autentificator
//  Gestión de Usuarios PHP+Mysql+sesiones
//  by Pedro Noves V. (Cluster)
//  clus@hotpop.com
// -----------------------------------------

// Cargamos variables
require ("aut_config.inc.php");
// le damos un mobre a la sesion (por si quisieramos identificarla)
session_name($usuarios_sesion);
// iniciamos sesiones
session_start();
// destruimos la session de usuarios.
session_destroy();
header( 'Location: /medtronics/' ) ;
?>