<?php

class Publication {
    private $ID;
    private $title;
    private $date;
    private $area;
    private $state;
    private $tags;
    private $description;

    public function __construct1($ID, $title, $date, $area, $state, $tags, $description) {
        $this->ID = $ID;
        $this->title = $title;
        $this->date = $date;
        $this->area = $area;
        $this->state = $state;
        $this->tags = $tags;
        $this->description = $description;
    }

    public function __construct2($title, $date, $area, $state, $tags, $description) {
        $this->title = $title;
        $this->date = $date;
        $this->area = $area;
        $this->state = $state;
        $this->tags = $tags;
        $this->description = $description;
    }

    public function __contruct3(){

    }

    public function getID() {
        return $this->ID;
    }

    public function setID($ID) {
        $this->ID = $ID;
    }

    public function getTitle() {
        return $this->title;
    }

    public function setTitle($title) {
        $this->title = $title;
    }

    public function getDate() {
        return $this->date;
    }

    public function setDate($date) {
        $this->date = $date;
    }

    public function getArea() {
        return $this->area;
    }

    public function setArea($area) {
        $this->area = $area;
    }

    public function getState() {
        return $this->state;
    }

    public function setState($state) {
        $this->state = $state;
    }

    public function getTags() {
        return $this->tags;
    }

    public function setTags($tags) {
        $this->tags = $tags;
    }

    public function getDescription() {
        return $this->description;
    }

    public function setDescription($description) {
        $this->description = $description;
    }

    /*
    //Traer lista de países
    public function selectCountry(){
        require 'config.php';
    
        // Establecer la conexión a la base de datos
        $conexion = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
        if ($conexion->connect_error) {
            // Manejo de errores si falla la conexión.
            die("Error de conexión: " . $conexion->connect_error);
        }
    
        // Consulta SQL para obtener los países.
        $sql = "SELECT * FROM `pais`";
        $result = $conexion->query($sql);
    
        // Verificar si la consulta se ejecutó correctamente.
        if ($result) {
            $resultList = array(); // Inicializar el array para almacenar los resultados.
    
            // Recorrer los resultados y almacenarlos en el array.
            while ($row = $result->fetch_assoc()) {
                $resultList[] = $row;
            }
    
            // Devolver los resultados.
            return $resultList;
        } else {
            // Manejo de errores si falla la consulta.
            echo "Error en la consulta: " . $conexion->error;
        }
    
        // Cerrar la conexión a la base de datos.
        $conexion->close();
    
        // En caso de error, retornar un valor apropiado (puedes utilizar un array vacío o null).
        return null;
    }
    */
    /*
    //Traer departamentos
    public function selectDepartment($pais_id){
        
        require '../config.php';
    
        // Establecer la conexión a la base de datos
        $conexion = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
        if ($conexion->connect_error) {
            // Manejo de errores si falla la conexión.
            die("Error de conexión: " . $conexion->connect_error);
        }
    
        // Consulta SQL para obtener los países.
        $sql = "SELECT * FROM `departamento` WHERE `Id_pais` = $pais_id";
        //echo $sql;
        $result = $conexion->query($sql);
    
        // Verificar si la consulta se ejecutó correctamente.
        if ($result) {
            $resultList = array(); // Inicializar el array para almacenar los resultados.
    
            // Recorrer los resultados y almacenarlos en el array.
            while ($row = $result->fetch_assoc()) {
                $resultList[] = $row;
            }

            // Crear las opciones del select de departamentos
            $options = '';
            $departments = $resultList;
            if ($departments !== null && !empty($departments)) {
            foreach ($departments as $department) {
                $departmentId = $department["Id"];
                $departmentName = $department["nombre"];
                $options .= "<option value='$departmentId'>$departmentName</option>";
            }
            } else {
            $options .= "<option value=''>No se encontraron departamentos</option>";
            }

            // Devolver las opciones como respuesta a la petición AJAX
            echo $options;
                
            // Devolver los resultados.
            //return $resultList;
        } else {
            // Manejo de errores si falla la consulta.
            echo "Error en la consulta: " . $conexion->error;
        }
    
        // Cerrar la conexión a la base de datos.
        $conexion->close();
    
        // En caso de error, retornar un valor apropiado (puedes utilizar un array vacío o null).
        return null;
            

        // return json_encode(["Error " => "No se traen los datos"]);

        
        }
*/
    

    public function Upload(){
        require '../config.php';
        $conexion = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
    }

}

?>