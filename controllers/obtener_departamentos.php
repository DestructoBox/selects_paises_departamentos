<?php

$pais_id = isset($_POST['paisId']) ? ($_POST['paisId']) : null;

  if ($pais_id !== null){
  $conexion = mysqli_connect("localhost", "root", "", "buscoempleo");
    
  $sql = "SELECT * FROM departamento WHERE Id_pais=$pais_id";
  $result = $conexion->query($sql);
    
  $departamentos = array();

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $departamentos[] = $row;
        }
    }
 
  $conexion->close();

  echo json_encode($departamentos);
  }
?>

