<?php

function obtener_paises(){

    $conexion = mysqli_connect("localhost", "root", "", "buscoempleo");
    
    $sql = "SELECT * FROM pais";
    $result = $conexion->query($sql);
    
    if ($result) {
        $resultList = array();
    
        while ($row = $result->fetch_assoc()) {
            $resultList[] = $row;
        }
    
        return $resultList;
    } else {
        echo "Error en la consulta: " . $conexion->error;
        return array(); // Devuelve un array vacío en caso de error.
    }
    
    $conexion->close();
}
    
?>

