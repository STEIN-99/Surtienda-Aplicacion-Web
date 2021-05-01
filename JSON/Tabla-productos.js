function mossProdcutos() {

    const xhttp= new XMLHttpRequest();

    xhttp.open('GET', 'consulta-productos.php', true);

    xhttp.send();

    xhttp.onreadystatechange = function () {

        if(this.readyState == 4 && this.status == 200){
            let datos = JSON.parse(this.responseText);

            let respuesta = document.querySelector('#respuesta');
            respuesta.innerHTML = '';

            for(let item of datos){
                respuesta.innerHTML += `
                <tr>
                <td> ${item.id_pro} </td>
                <td> ${item.marca} </td>
                <td> ${item.nombre} </td>
                <td> ${item.descrip} </td>
                <td> <img height="50px" src="../${item.img}"/></td>
                <td> ${item.precio} </td>
                </tr>
                `
            }
        }
    }
    
}