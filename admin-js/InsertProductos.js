function crearInstancia()
{
	XMLHttp=false;
	if(window.XMLHttpRequest)
	{
		return new XMLHttpRequest();
	}
	else
	{
		alert('No se pudo crear la instancia');
	}
}

function registrarProductos(){

	XMLHttp=crearInstancia();
	if(XMLHttp)
	{
		marca=document.Reproductos.marcas.value;
		producto=document.Reproductos.prodcuto.value;
		des=document.Reproductos.descrip.value;
		pre=document.Reproductos.precio.value;
		imag=document.Reproductos.img.value;

		url="../funciones/AgregarProducto.php?marca=" + marca + 
		"&producto=" + producto +
		"&de=" + des +
		"&pre=" + pre + 
		"&imag=" + imag;


	XMLHttp.open("POST",url,true);
		XMLHttp.onload= function rescliente() {
			if(XMLHttp.readyState==4){
				if(XMLHttp.responseText=='1')
				{
					//respuesta="<a href='bienvenido.php'>Acceso</a>";
					alert('Error de registro');
				}
				else
				{
					//alert('No se pudo hacer el registro');
					alert("El registro de nueva sucursal se realizo correctamente");
					document.getElementById('modal-Aproductos').classList.remove('bg-active');;
					mostrarProductos();
		
				}
			}
		}
		XMLHttp.send(null);
	}
}