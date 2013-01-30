<?php
include("config.php");
$c = new Buscador;
$c-> Conectar();
?>

<div class="demo">

<p>Date: <input type="text" id="datepicker"></p>

</div><!-- End demo -->
		
<table width="900" border="0" align="center" cellpadding="0" cellspacing="2">
  <tr>
    <td width="200">Referencia </td>
    <td width="270"><input  type="text" size="20" class="caja"  value="<? $c -> ContratoNum(); ?>"  id="contratoID"/></td>
    <td>Fecha Inicio</td>
    <td width="240"><input  type="text" size="15" class="caja" id="fecha_inicio"/></td>
  </tr>
  <tr>
    <td width="200">tipo</td>
    <td width="270"><select name="select2" size="1" id="tipo">
		<? $c-> Conectar(); $c -> Tipo(); ?>
    </select></td>
    <td>Fecha Final</td>
    <td width="240"><input  type="text" size="15" class="caja" id="fecha_final"/></td>
  </tr>
  <tr>
    <td width="200">Empresa</td>
    <td width="270">
        <input list="empresas" name="browser" />
        <datalist id="empresas">
          <option value="Medtronics Colombia">
          <option value="Medtronics USA">
          <option value="Medtronics Otro">
        </datalist>
   </td>
    <td>Contratista</td>
    
    <td width="240"><label for="select"> </label><select name="select" size="1" id="select">
      	<? $c-> Conectar(); $c -> Tercero(); ?>
    </select></td>
  </tr>
  <tr>
     <td colspan="4"><div class="resultado2" id="resultado2"></div></td>
  </tr>
  <tr>
    <td width="200">Direccion Despacho</td>
    <td width="270"><input  type="text" size="20" class="caja" id="valor4"/></td>
    <td>&nbsp;</td>
    <td width="240">&nbsp;</td>
  </tr>
  <tr>
    <td width="200">Valor</td>
    <td width="270"><input  type="text" size="20" class="caja" id="valor5"/>
     <label for="select4">moneda </label> <select name="select4" size="1" id="select2">
        <option value="USD">USD</option>
        <option value="COP">COP</option>
    </select></td>
    <td>Estado</td>
    <td width="240"><select name="select3" size="1" id="select3">
      <option value="asd">asd</option>
      <option value="asd">sd</option>
    </select></td>
  </tr>
  <tr>
    <td width="200"><p>Objeto</p></td>
    <td width="270">&nbsp;</td>
    <td>&nbsp;</td>
    <td width="240">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="4"><label for="textarea"></label>
    <textarea name="textarea" id="textarea" cols="75" rows="5"></textarea></td>
  </tr>
  <tr>
    <td width="200">&nbsp;</td>
    <td width="270">&nbsp;</td>
    <td>&nbsp;</td>
    <td width="240">&nbsp;</td>
  </tr>
  <tr>
    <td width="200">&nbsp;</td>
    <td width="270">&nbsp;</td>
    <td>&nbsp;</td>
    <td width="240">&nbsp;</td>
  </tr>
  <tr>
    <td width="200">&nbsp;</td>
    <td width="270">&nbsp;</td>
    <td>&nbsp;</td>
    <td width="240">&nbsp;</td>
  </tr>
  <tr>
    <td width="200">&nbsp;</td>
    <td width="270">&nbsp;</td>
    <td>&nbsp;</td>
    <td width="240">&nbsp;</td>
  </tr>
  <tr>
    <td width="200">&nbsp;</td>
    <td width="270">&nbsp;</td>
    <td>&nbsp;</td>
    <td width="240">&nbsp;</td>
  </tr>
</table>


</body>
</html>
