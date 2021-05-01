function traerclientes() {

    const xhttp= new XMLHttpRequest();

    xhttp.open('GET', 'Consulta.php', true);

    xhttp.send();

    xhttp.onreadystatechange = function () {

        if(this.readyState == 4 && this.status == 200){
            let datos = JSON.parse(this.responseText);

            let respuesta = document.querySelector('#respuesta');
            respuesta.innerHTML = '';

            for(let item of datos){
                respuesta.innerHTML += `
                <tr>
                <td> ${item.id_sucursal} </td>
                <td> ${item.nombre} </td>
                <td> ${item.direccion} </td>
                </tr>
                `
            }
        }
    }
    
}