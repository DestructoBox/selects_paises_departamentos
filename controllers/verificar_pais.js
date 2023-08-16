
    
    $(document).ready(function() {
        // Cuando se seleccione un país
        $('#paisSelect').change(function() {
            var paisesID = $(this).val(); // Obtener el ID del país seleccionado
            //console.log(paisesID);
            // Realizar una petición AJAX para obtener los departamentos
            $.ajax({
                url: 'controllers/obtener_departamentos.php', // Cambia esto por la URL de tu script de servidor
                method: 'POST',
                data: { paisId: paisesID }, // Enviar el ID del país al servidor
                dataType: 'json', // Indicar que esperamos datos en formato JSON
                success: function(data) {
                    let select = '<option value="0">Seleccione un departamento</option>';
                    for(var i = 0; i < data.length; i++){
                        select += '<option value="'+ data[i].id +'">'+ data[i].nombre +'</option>';
                    }
                    $("#departamentoSelect").html(select);
                },
                error: function() {
                    console.log('Error al cargar los departamentos');
                }
            });
        });
    });
    
