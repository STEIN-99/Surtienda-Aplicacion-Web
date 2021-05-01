///////////Mostrar y ocultar

function mostrarConsulta (){
    document.getElementById('Consulta').style.display="block";
    document.getElementById('Servicios').style.display="None";
	document.getElementById('Quienes').style.display="None";
	document.getElementById('Consultas').style.display="None";
	document.getElementById('cancelar').style.display="None";
    document.getElementById('Garantias').style.display="None";
}

function mostrarServicios (){
    document.getElementById('Consulta').style.display="None";
    document.getElementById('Servicios').style.display="block";
	document.getElementById('Quienes').style.display="None";
	document.getElementById('Consultas').style.display="None";
	document.getElementById('cancelar').style.display="None";
    document.getElementById('Garantias').style.display="None";

}

function mostrarQuienes (){
    document.getElementById('Consulta').style.display="None";
    document.getElementById('Servicios').style.display="None";
	document.getElementById('Quienes').style.display="block";
	document.getElementById('Consultas').style.display="None";
	document.getElementById('cancelar').style.display="None";
    document.getElementById('Garantias').style.display="None";
}

function mostrarConsultas (){
    document.getElementById('Consulta').style.display="None";
    document.getElementById('Servicios').style.display="None";
	document.getElementById('Quienes').style.display="None";
	document.getElementById('Consultas').style.display="Block";
	document.getElementById('cancelar').style.display="None";
    document.getElementById('Garantias').style.display="None";
}

function mostrarcancelar (){
    document.getElementById('Consulta').style.display="None";
    document.getElementById('Servicios').style.display="None";
	document.getElementById('Quienes').style.display="None";
	document.getElementById('Consultas').style.display="None";
	document.getElementById('cancelar').style.display="Block";
    document.getElementById('Garantias').style.display="None";
}

function mostrarGarantias (){
    document.getElementById('Consulta').style.display="None";
    document.getElementById('Servicios').style.display="None";
	document.getElementById('Quienes').style.display="None";
	document.getElementById('Consultas').style.display="None";
	document.getElementById('cancelar').style.display="None";
    document.getElementById('Garantias').style.display="Block";
}