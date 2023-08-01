<?php

class ModelInforme{

    public $conexion;

  

    //////////////  ATRIBUTOS INFORME  /////////////////////
    public $id;
    public $placa;
    public $marca;
    public $nombre_completo_conductor;
    public $nombre_completo_propietario;
   
    


    public  function __construct(){
       try{
        $this->conexion = Conexion::conectar();
       }catch(Exception $e){
        die($e->getMessage());
       }

    }
    
    

   ////////////////// METODOS INFORME //////////////////

   public function mostrarInformes(){

    try{
        $query = "SELECT informes.id, placa.placa, marca.marca, 
        conductores.primer_nombre as primer_nombre_conductor, 
        conductores.apellidos as apellidos_conductor, 
        propietarios.primer_nombre as primer_nombre_propietario, 
        propietarios.apellidos as apellidos_propietario
        FROM informes INNER JOIN conductores  ON   informes.nombre_completo_conductor = conductores.id
                      INNER JOIN vehiculos as placa  ON    informes.placa = placa.id
                      INNER JOIN vehiculos as marca  ON   informes.marca = marca.id 
                      INNER JOIN propietarios  ON   informes.nombre_completo_propietario = propietarios.id";
                  
    
    $stmt = $this->conexion->prepare($query);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_OBJ);
    }catch(Exception $e){
        die($e->getMessage());
    }
    }  

    public function borrarInforme($id){

        try{
            $query="DELETE FROM informes WHERE id=?";

            $stmt = $this->conexion->prepare($query);
            $stmt->execute(array($id));
        }catch(Exception $e){
            die($e->getMessage());
        }

    }

    public function cargarIdInforme($id){

        try{
            $query="SELECT * FROM informes WHERE id=?";

            $stmt = $this->conexion->prepare($query);
            $stmt->execute(array($id));
            return $stmt->fetch(PDO::FETCH_OBJ);
        }catch(Exception $e){
            die($e->getMessage());
        }

    }

    public function registrarInforme($data){

        try{
            $query="INSERT INTO informes (placa, marca, nombre_completo_conductor, nombre_completo_propietario)
            VALUES (?, ?, ?, ?)";

            $this->conexion->prepare($query)->execute(array($data->placa,
                                                            $data->marca,
                                                            $data->nombre_completo_conductor,
                                                            $data->nombre_completo_propietario
                                                            
                                                     
            ));

        }catch(Exception $e){
            die($e->getMessage());
        }

    } 

    public function actualizarInforme($data){

        try{
            $query="UPDATE  informes SET placa=?, marca=?, nombre_completo_conductor=?, nombre_completo_propietario=?
            WHERE id=?";

            $this->conexion->prepare($query)->execute(array($data->placa,
                                                            $data->marca,
                                                            $data->nombre_completo_conductor,
                                                            $data->nombre_completo_propietario,
                                                            $data->id
            ));

        }catch(Exception $e){
            die($e->getMessage());
        }

    } 

    public function cargarPropietarios(){

        try{
            $query="SELECT * FROM propietarios";

            $stmt = $this->conexion->prepare($query);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_OBJ);
        }catch(Exception $e){
            die($e->getMessage());
        }

    } 

    public function cargarConductores(){

        try{
            $query="SELECT * FROM conductores";

            $stmt = $this->conexion->prepare($query);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_OBJ);
        }catch(Exception $e){
            die($e->getMessage());
        }

    } 

    public function cargarPlacas(){

        try{
            $query="SELECT * FROM vehiculos";

            $stmt = $this->conexion->prepare($query);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_OBJ);
        }catch(Exception $e){
            die($e->getMessage());
        }

    } 

    public function cargarMarcas(){

        try{
            $query="SELECT * FROM vehiculos";

            $stmt = $this->conexion->prepare($query);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_OBJ);
        }catch(Exception $e){
            die($e->getMessage());
        }

    } 


 



}


?>