function nuevoAjax()
{
    var xmlhttp=false;
    try
    {xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");}
    catch (e)
    	{ try
       	 {xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");}
    	    catch (e)
     	   {xmlhttp = false;}
    }if (!xmlhttp && typeof XMLHttpRequest!='undefined')
    {xmlhttp = new XMLHttpRequest();}
    return xmlhttp;
}
/*-----------------------------------------------------------------------
--------------------------Buscar un Registro------------------------------
-----------------------------------------------------------------------*/

function Buscar (){
	q = document.getElementById('valor').value;
	c = document.getElementById('resultado');
	ajax = nuevoAjax();
	ajax.open("GET","procesar.php?q="+q);
	ajax.onreadystatechange=function(){
		if(ajax.readyState == 4){
			c.innerHTML = ajax.responseText;
			}
		}
	ajax.send(null);
	}
/*-----------------------------------------------------------------------
--------------------------Editar Registro------------------------------
-----------------------------------------------------------------------*/	
function Editar (q){
	c = document.getElementById('resultado');
	ajax = nuevoAjax();
	ajax.open("GET","editar.php?q="+q);
	ajax.onreadystatechange=function(){
		if(ajax.readyState == 4){
			c.innerHTML = ajax.responseText;
			}
		}
	ajax.send(null);
	}

/*-----------------------------------------------------------------------
--------------------------Insertar Contrato------------------------------
-----------------------------------------------------------------------*/	
function Contrato(){
	c = document.getElementById('resultado');
	ajax = nuevoAjax();
	ajax.open("GET","contrato.php");
	ajax.onreadystatechange=function(){
		if(ajax.readyState == 4){
			c.innerHTML = ajax.responseText;
			}
		}
	ajax.send(null);
	}
	
/*-----------------------------------------------------------------------
--------------------------Guardar Registro------------------------------
-----------------------------------------------------------------------*/	
function GuardarEdicion (q){
	c = document.getElementById('resultado');
	q = document.getElementById('ID').value;
	n = document.getElementById('usuario').value;
	a = document.getElementById('nivel_acceso').value;
	ajax = nuevoAjax();
	ajax.open("GET","guardar.php?q="+q+"&n="+n+"&a="+a+"&tabla=1");
	ajax.onreadystatechange=function(){
		if(ajax.readyState == 4){
			c.innerHTML = ajax.responseText;
			}
		}
	ajax.send(null);
	}
	
/*-----------------------------------------------------------------------
--------------------------Insertar Contrator------------------------------
-----------------------------------------------------------------------*/	
function insertarContrato (q){
	c = document.getElementById('resultado');
	ci = document.getElementById('contratoID').value;
	ui = document.getElementById('usuarioID').value;
	fi = document.getElementById('fecha_inicio').value;
	ff = document.getElementById('fecha_final').value;
	ti = document.getElementById('tipo').value;
	em = document.getElementById('empresa').value;
	co = document.getElementById('contratista').value;
	di = document.getElementById('dirección').value;
	va = document.getElementById('valor').value;
	es = document.getElementById('estado').value;
	ob = document.getElementById('objeto').value;
	um = document.getElementById('usuarioM').value;
	
	
	ajax = nuevoAjax();
	ajax.open("GET","guardar.php?ci="+ci+"&ui="+ui+"&fi="+fi+"&ff="+ff+"&ti="+ti+"&em="+em+"&co="+co+"&di="+di+"&va="+va+"&es="+es+"&ob="+ob+"&tabla=2");
	ajax.onreadystatechange=function(){
		if(ajax.readyState == 4){
			c.innerHTML = ajax.responseText;
			}
		}
	ajax.send(null);
	}	
/*-----------------------------------------------------------------------
--------------------------Eliminar Registro------------------------------
-----------------------------------------------------------------------*/
function Eliminar (q){
	c = document.getElementById('resultado');
	ajax = nuevoAjax();
	ajax.open("GET","eliminar.php?q="+q);
	ajax.onreadystatechange=function(){
		if(ajax.readyState == 4){
			c.innerHTML = ajax.responseText;
			}
		}
	ajax.send(null);
	}
	
function Confirmar(q){
	c = confirm('¿Desea Eliminar el Registro?');
	if(c){
		Eliminar(q);
	}else {
		return false;
	}
} 	
	
/*-----------------------------------------------------------------------
--------------------------Mostrar y ocultar------------------------------
-----------------------------------------------------------------------*/	



function cerrar(idiv) {
	div = document.getElementById(idiv);
	div.style.display='none';
}
	