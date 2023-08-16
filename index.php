<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Publication</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <form action="">
        <label for="title">Título de la publicación</label><br>
        <input type="text" id="title"><br>

        <label for="area">Rubro de la publicación</label><br>
        <input type="text" id="area"><br>

        <label for="description">Descripción de la publicación</label><br>
        <input type="text" id="description"><br>

        <label for="status">Estado de la publicación</label><br>
        <input type="checkbox" id="status"><br>

        <label for="paisSelect">País</label><br>
        <select name="paisSelect" id="paisSelect">
            <option value="0">Seleccione un país</option>
            <?php
                // Incluir el archivo para obtener paises
                include 'controllers/obtener_paises.php';

                // Obtener los países usando la función obtener_paises()
                $paises = obtener_paises();

                 // Rellenar el select con los resultados
                foreach ($paises as $pais) {
                echo '<option value="' . $pais['Id'] . '">' . $pais['nombre'] . '</option>';
            }
            ?>
        </select><br> 

        <label for="departmentSelect">Departamento</label><br>
        <select name="departamentoSelect" id="departamentoSelect">
        </select>
    </form>

    <script  src="controllers/verificar_pais.js"></script>
</body>
</html>
