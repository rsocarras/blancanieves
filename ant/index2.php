<?php
//  Autentificator
//  Gestión de Usuarios PHP+Mysql+sesiones
//  by Pedro Noves V. (Cluster)
//  clus@hotpop.com
// ------------------------------------------
require("admin/aut_verifica.inc.php");
$nivel_acceso=4; // Nivel de acceso para esta página.
// se chequea si el usuario tiene un nivel inferior
// al del nivel de acceso definido para esta página.
// Si no es correcto, se mada a la página que lo llamo con
// la variable de $error_login definida con el nº de error segun el array de
// aut_mensaje_error.inc.php
if ($nivel_acceso <= $_SESSION['usuario_nivel']){
header ("Location: $redir?error_login=5");
exit;
}

include("config.php");
$c = new Buscador;
$c-> Conectar();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Administracion de Contratos</title>
<link rel="stylesheet" type="text/css" href="css/reset.css" media="all" />
<link rel="stylesheet" type="text/css" href="css/estilos.css" media="all" />
<script language="javascript" type="text/javascript" src="javascript/jquery-1.3.2.min.js"></script>
<script language="javascript" type="text/javascript" src="javascript/csspopup.js"></script>
<script language="javascript" type="text/javascript" src="ajax.js" ></script>
<script type="text/javascript" src="includes/date/js/jquery-1.8.0.min.js"></script>
<script type="text/javascript" src="includes/date/js/jquery-ui-1.8.23.custom.min.js"></script>
<link type="text/css" href="includes/date/css/ui-lightness/jquery-ui-1.8.23.custom.css" rel="stylesheet" />
<script>
	$(function() {
		$( ".datepicker" ).datepicker({
			showOtherMonths: true,
			selectOtherMonths: true,
			dateFormat: 'yy-mm-dd'
		});
	});
	//hover states on the static widgets
				$('#dialog_link, ul#icons li').hover(
					function() { $(this).addClass('ui-state-hover'); },
					function() { $(this).removeClass('ui-state-hover'); }
				);
			
</script>
	<style type="text/css">
			/*demo page css*/
			body{ font: 62.5% "Trebuchet MS", sans-serif; margin: 50px;}
			.demoHeaders { margin-top: 2em; }
			#dialog_link {padding: .4em 1em .4em 20px;text-decoration: none;position: relative;}
			#dialog_link span.ui-icon {margin: 0 5px 0 0;position: absolute;left: .2em;top: 50%;margin-top: -8px;}
			ul#icons {margin: 0; padding: 0;}
			ul#icons li {margin: 2px; position: relative; padding: 4px 0; cursor: pointer; float: left;  list-style: none;}
			ul#icons span.ui-icon {float: left; margin: 0 4px;}
		</style>

<!--[if IE]>
<style type="text/css" media="all">
	#capaPopUp 	{filter:alpha(opacity=65);}
</style>
<![endif]-->
</head>
<body>
    <div id="capaPopUp"></div>
    <div id="popUpDiv">
      	 
         <div id="capaContent">
            <div style="float:right; padding-right:8px;">
               <ul id="icons" class="ui-widget ui-helper-clearfix">
               		<a href="javascript:void(0);" title="Cerrar" id="cerrar"><li class="ui-state-default ui-corner-all" title=".ui-icon-circle-close"><span class="ui-icon ui-icon-circle-close"></span></li></a>
                    
               </ul>
            </div>
            <div class="resultado textoContrato borde" id="resultado">
				<form action="#">
                 <table width="840" border="0" cellpadding="0" cellspacing="2" align="center">
                    <tr>
                    <td width="200">&nbsp;</td>
                    <td width="200">&nbsp;</td>
                    <td>&nbsp;</td>
                    <td width="200">&nbsp;</td>
                  </tr>
                  <tr>
                     <td colspan="4" width="200" style="font-size:24px"><img src="images/1341508914_file_add.png" width="40" height="40" />Añadir Nuevo Contrato</td>
                  </tr>
                   <tr>
                     <td colspan="4" width="200" style="font-size:24px"></td>
                  </tr>
                  <tr>
                    <td width="200" class="celdaGris">Referencia </td>
                    <td width="200"><input  type="text" size="20" class="caja"  value="<? $c -> ContratoNum(); ?>"  id="contratoID" disabled="disabled" /></td>
                    <td width="200" class="celdaGris">Fecha Inicio</td>
                    <td width="200"><input  required="required" type="text" size="15" class="datepicker" id="fecha_inicio"/></td>
                  </tr>
                  <tr>
                    <td width="200" class="celdaGris">Tipo</td>
                    <td width="200"><select  required="required" name="select2" size="1" id="tipo">
                        <? $c-> Conectar(); $c -> Tipo(); ?>
                    </select></td>
                    <td width="200" class="celdaGris">Fecha Final</td>
                    <td width="200"><input  required="required" type="text" size="15" class="datepicker" id="fecha_final"/></td>
                  </tr>
                  <tr>
                    <td width="200" class="celdaGris">Empresa</td>
                    <td width="200">
                        <input  required="required" list="empresas" name="browser"  id="empresa"/>
                        <datalist id="empresas">
                          <option value="Medtronics Colombia">
                          <option value="Medtronics USA">
                          <option value="Medtronics Otro">
                        </datalist>
                   </td>
                    <td width="200" class="celdaGris">Contratista</td>
                    
                    <td width="200"><label for="select"> </label><select name="select" size="1" id="contratista">
                        <? $c-> Conectar(); $c -> Tercero(); ?>
                    </select></td>
                  </tr>
                  <tr>
                     <td colspan="4"><div class="resultado2" id="resultado2"></div></td>
                  </tr>
                  <tr>
                    <td width="200" class="celdaGris">Direccion Despacho</td>
                    <td width="200"><input  type="text" size="20" class="caja" id="dirección"/></td>
                    <td width="200" class="celdaGris">Contacto Metronics</td>
                    <td width="200"><input  type="text" size="20" class="caja" id="usuarioM"/></td>
                  </tr>
                  <tr>
                    <td width="200" class="celdaGris">Valor</td>
                    <td width="200"><input  type="text" size="20" class="caja" id="valor"/></td>
                    <td width="200" class="celdaGris"><label for="select4">moneda </label> </td>
                    <td width="200">                    
                    <select name="select4" size="1" id="select2">
                        <option value="USD">USD</option>
                        <option value="COP">COP</option>
                    </select></td>
                  </tr>
                  <tr>
                    <td width="200">Objeto:</td>
                    <td width="200">&nbsp;</td>
                    <td width="200" class="celdaGris">Estado</td>
                    <td width="200"><select name="select3" size="1" id="estado">
                       <? $c-> Conectar(); $c -> Estado(); ?>
                    </select></td>
                  </tr>
                  <tr>
                    <td colspan="4"><label for="textarea"></label>
                    <textarea name="textarea" id="objeto" cols="75" rows="5" style="max-width:800px; max-height:200px"></textarea></td>
                  </tr>
                
                  <tr>
                    <td width="200">&nbsp;</td>
                    <td width="200">&nbsp;</td>
                    <td width="200">&nbsp;</td>
                    <td width="200">&nbsp;</td>
                  </tr>
                  <tr>
                    <td width="200">&nbsp;</td>
                    <td width="200">&nbsp;</td>
                    <td width="200">&nbsp;</td>
                    <td width="200">&nbsp;</td>
                  </tr>
                  <tr>
                    <td width="200">&nbsp;</td>
                    <td width="200">&nbsp;</td>
                    <td width="200">&nbsp;</td>
                    <td width="200"> <input type="hidden" size="20" class="caja" id="usuarioID"  value="<? echo $_SESSION['usuario_id'] ?>"/><input type="submit" /></td>
                  </tr>
                </table></form></div>
        </div>
    
    </div>
    
     <div id="capaPopUp2"></div>
    <div id="popUpDiv2">
      	 
         <div id="capaContent">
            <div>
               Cerrar capa2 --- <a href="javascript:void(0);" title="Cerrar" id="cerrar2">Cerrar</a>
            </div>
            <div class="resultado" id="resultado"></div>
        </div>
    
    </div>
    
<div id="wrapper">
    <div  class="wrapperContent">
		<div  class="ContentTable" style="border: thin solid #06C; width:800px; margin:0 auto; text-align:center;">
      	  
      <table width="800" border="0" align="center" cellpadding="4" cellspacing="4">
        <tr>
          <td width="233"><img src="images/mdt-logo.png" width="206" height="40" /></td>
          <td width="233" class="titulo">Aplicación de Gestión de Contrato</td>
          <td width="233" align="right"><span style=" text-decoration:none; font:Tahoma, Geneva, sans-serif bold; font-size:12px; "><a href="admin/aut_logout.php">Salir</a></span></td>
        </tr>
        <tr>
          <td colspan="3"><hr /></td>
        </tr>
        <tr>
          <td width="233"><a href="javascript:abrir(0);"  title="Abrir PopUp" id="abrirPop"><img src="images/1341508914_file_add.png" width="128" height="128"/></a></td>
          <td width="233"><a href="javascript:abrir(0);"  title="Abrir PopUp" id="abrirPop2"><img src="images/1341508918_file_search.png" width="128" height="128" /></a></td>
          <td width="233"><img src="images/1341508925_file_edit.png" width="128" height="128" /></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td width="233"><img src="images/1341509272_user.png" width="128" height="128" /></td>
          <td width="233">&nbsp;</td>
          <td width="233">&nbsp;</td>
        </tr>
        <tr>
          <td colspan="3" align="center" class="ui-widget">&nbsp;</td>
        </tr>
        <tr>
          <td colspan="3" align="center" class="ui-widget">&nbsp;</td>
        </tr>
        <tr>
          <td colspan="3" align="center" class="ui-widget">Software de Gestión de Contratos desarrollado por Integrasys SAS</td>
        </tr>
      </table>

  			</div>
  </div>
    </div><!-- #wrapper -->

</body>
</html>
