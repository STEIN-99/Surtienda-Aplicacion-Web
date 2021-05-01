function objetoAjax(){
	var xmlhttp=false;
	try {
	xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
	} catch (e) {
	try {
	xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
	} catch (E) {
	xmlhttp = false;
	}
	}
	if (!xmlhttp && typeof XMLHttpRequest!='undefined') {
	  xmlhttp = new XMLHttpRequest();
	  }
	  return xmlhttp;
   }



//////////////////////////////////////////////////////////

   function eliminarProducto(ID_PRO){
	//donde se mostrará el resultado de la eliminacion

	//usaremos un cuadro de confirmacion 
	var eliminar = confirm("¿Desea eliminar este dato?")
	if ( eliminar ) {
	//instanciamos el objetoAjax
	ajax=objetoAjax();
	//uso del medotod GET
	//indicamos el archivo que realizará el proceso de eliminación
	//junto con un valor que representa el id del empleado
	ajax.open("GET", "../funciones/DeleteProducto.php?ID_PRO="+ID_PRO);
		ajax.onreadystatechange=function() {
			if (ajax.readyState==4) {
			//mostrar resultados en esta capa
			mostrarProductos();
			}
	}
	//como hacemos uso del metodo GET
	//colocamos null
	ajax.send(null)
	}
 }

//////////////////////////////////////////////////////////


   function eliminarvendedor(ID_VENDEDOR){
	//donde se mostrará el resultado de la eliminacion

	//usaremos un cuadro de confirmacion 
	var eliminar = confirm("¿Desea eliminar este dato?")
	if ( eliminar ) {
	//instanciamos el objetoAjax
	ajax=objetoAjax();
	//uso del medotod GET
	//indicamos el archivo que realizará el proceso de eliminación
	//junto con un valor que representa el id del empleado
	ajax.open("GET", "../funciones/DeleteVendedor.php?ID_VENDEDOR="+ID_VENDEDOR);
		ajax.onreadystatechange=function() {
			if (ajax.readyState==4) {
			//mostrar resultados en esta capa
			mostrarVendedores();
			}
	}
	//como hacemos uso del metodo GET
	//colocamos null
	ajax.send(null)
	}
 }

////////////////////////////////////////////////////////


function eliminarcliente(ID_CLIENTES){
	//donde se mostrará el resultado de la eliminacion

	//usaremos un cuadro de confirmacion 
	var eliminar = confirm("¿Desea eliminar este dato?")
	if ( eliminar ) {
	//instanciamos el objetoAjax
	ajax=objetoAjax();
	//uso del medotod GET
	//indicamos el archivo que realizará el proceso de eliminación
	//junto con un valor que representa el id del empleado
	ajax.open("GET", "../funciones/DeleteCliente.php?ID_CLIENTES="+ID_CLIENTES);
		ajax.onreadystatechange=function() {
			if (ajax.readyState==4) {
			//mostrar resultados en esta capa
			mostrarClientes();
			}
	}
	//como hacemos uso del metodo GET
	//colocamos null
	ajax.send(null)
	}
 }

////////////////////////////////////////////////////////

   function eliminarDato(ID_SUCURSAL){
	//donde se mostrará el resultado de la eliminacion

	//usaremos un cuadro de confirmacion 
	var eliminar = confirm("¿Desea eliminar este dato?")
	if ( eliminar ) {
	//instanciamos el objetoAjax
	ajax=objetoAjax();
	//uso del medotod GET
	//indicamos el archivo que realizará el proceso de eliminación
	//junto con un valor que representa el id del empleado
	ajax.open("GET", "../funciones/DeleteSucursales.php?ID_SUCURSAL="+ID_SUCURSAL);
		ajax.onreadystatechange=function() {
			if (ajax.readyState==4) {
			//mostrar resultados en esta capa
			mostrarSucursales();
			}
	}
	//como hacemos uso del metodo GET
	//colocamos null
	ajax.send(null)
	}
 }