$(document).ready(function () {

    mostrarDatos();

    function mostrarDatos() {
        $.ajax({
            url: '../Modelo/list.php',
            type: 'GET',
            success: function (response) {
                let datos = JSON.parse(response);
                let template = '';
                datos.forEach(dato => {
                    template += `
                        <tr datoId=${dato.id} align="center">
                            <td class="centrado">${dato.id}</td>
                            <td class="centrado">${dato.nombre}</td>
                            <td class="centrado">${dato.fecha}</td>
                            <td class="centrado">${dato.numero}</td>
                            <td class="centrado"><img class="imagenFoto" src="../Assets/images/${dato.urlFoto}"></td>
                            <td class="centrado"><img class="imagenFirma" src="../Assets/images/${dato.urlFirma}"></td>
                            <td class="centrado">
                                <button class="imprimir boton">Imprimir</button>
                            </td>
                            <td class="centrado">
                                <button class="eliminar boton">Eliminar</button>
                            </td>
                        </tr>
                    `
                });
                $('#datos').html(template);
            }
        });
    }

    $(document).on('click', '.imprimir', function () {
        let element = $(this)[0].parentElement.parentElement;
        let id = $(element).attr('datoId');
        $.post('../Modelo/generar-dato.php', {id}, function (response) {
            console.log(response)
        })
    })

    $(document).on('click', '.eliminar', function () {
        if(confirm('¿Estás seguro de querer eliminar el registro?')) {
            let element = $(this)[0].parentElement.parentElement;
            let id = $(element).attr('datoId');
            $.post('../Modelo/borrar-registro.php', {id}, function (response) {
                console.log(response)
                mostrarDatos();
            })
        }
    })

})