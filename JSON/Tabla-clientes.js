function mosCliente() {

    const xhttp= new XMLHttpRequest();

    xhttp.open('GET', 'consulta-cliente.php', true);

    xhttp.send();

    xhttp.onreadystatechange = function () {

        if(this.readyState == 4 && this.status == 200){
            let datos = JSON.parse(this.responseText);

            let respuesta = document.querySelector('#respuesta');
            respuesta.innerHTML = '';

            for(let item of datos){
                respuesta.innerHTML += `
                <tr>
                <td> ${item.id_clientes} </td>
                <td> ${item.correo_elec} </td>
                <td> ${item.contrasena} </td>
                <td> ${item.nombre} </td>
                <td> ${item.apellido_mat} </td>
                <td> ${item.apellido_pat} </td>
                <td> ${item.direccion} </td>
                <td> ${item.telefono} </td>
                <td> ${item.nom_local} </td>
                </tr>
                `
            }
        }
    }
    
}