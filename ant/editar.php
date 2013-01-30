<?php
include("config.php");
$c = new Buscador;
$c-> Conectar();
$q = $_GET['q'];
$c = mysql_fetch_assoc(mysql_query("SELECT * FROM oul_usuarios WHERE ID = '$q'"));
$numeroCon = new Buscador;
$numeroCon -> ContratoNum();
?>
<table width="200" border="1">
  <tr>
    <td>id</td>
  </tr>
  <tr>
    <td><input type="text" value="<? print $c['ID']; ?>" id="ID" /></td>
  </tr>
  <tr>
    <td>usuario</td>
  </tr>
  <tr>
    <td><input type="text" value="<? print $c['usuario']; ?>" id="usuario" /></td>
  </tr>
  <tr>
    <td>nivel de acceso</td>
  </tr>
  <tr>
    <td><input type="text" value="<? print $c['nivel_acceso']; ?>" id="nivel_acceso" /></td>
  </tr>
  <tr>
    <td><input type="submit" name="button" id="button" value="Editar" onclick="GuardarEdicion(<? print $c['ID']; ?>)" /></td>
  </tr>
</table>