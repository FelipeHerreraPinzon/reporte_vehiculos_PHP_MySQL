<?php

class ModelVehiculo{

    public $conexion;

  

    //////////////  ATRIBUTOS VEHICULO  /////////////////////
    public $id;
    public $placa;
    public $color;
    public $marca;
    public $tipo_vehiculo;
    public $conductor;
    public $propietario;

    


    public  function __construct(){
       try{
        $this->conexion = Conexion::conectar();
       }catch(Exception $e){
        die($e->getMessage());
       }

    }
    
    

   ////////////////// METODOS VEHICULO //////////////////

   public function mostrarVehiculos(){

    try{
        $query = "SELECT vehiculos.id, vehiculos.placa, vehiculos.color, vehiculos.tipo_vehiculo, vehiculos.marca, vehiculos.tipo_vehiculo, 
                         propietarios.primer_nombre as primer_nombre_propietario, propietarios.apellidos as apellidos_propietario, 
                         conductores.primer_nombre as primer_nombre_conductor, conductores.apellidos as apellidos_conductor

            FROM vehiculos INNER JOIN propietarios  ON   vehiculos.propietario = propietarios.id
                           INNER JOIN conductores  ON   vehiculos.conductor = conductores.id";
                  
    
    $stmt = $this->conexion->prepare($query);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_OBJ);
    }catch(Exception $e){
        die($e->getMessage());
    }
    }

    public function borrarVehiculo($id){

        try{
            $query="DELETE FROM vehiculos WHERE id=?";

            $stmt = $this->conexion->prepare($query);
            $stmt->execute(array($id));
        }catch(Exception $e){
            die($e->getMessage());
        }

    }

    public function cargarIdVehiculo($id){

        try{
            $query="SELECT * FROM vehiculos WHERE id=?";

            $stmt = $this->conexion->prepare($query);
            $stmt->execute(array($id));
            return $stmt->fetch(PDO::FETCH_OBJ);
        }catch(Exception $e){
            die($e->getMessage());
        }

    }

    public function registrarVehiculo($data){

        try{
            $query="INSERT INTO vehiculos (placa, color, marca, tipo_vehiculo, conductor, propietario)
            VALUES (?, ?, ?, ?, ?, ?)";

            $this->conexion->prepare($query)->execute(array($data->placa,
                                                            $data->color,
                                                            $data->marca,
                                                            $data->tipo_vehiculo,
                                                            $data->conductor,
                                                            $data->propietario
                                                            
                                                     
            ));

        }catch(Exception $e){
            die($e->getMessage());
        }

    } 

    public function actualizarVehiculo($data){

        try{
            $query="UPDATE  vehiculos SET placa=?, color=?, marca=?, tipo_vehiculo=?, conductor=?, propietario=?
            WHERE id=?";

            $this->conexion->prepare($query)->execute(array($data->placa,
                                                            $data->color,
                                                            $data->marca,
                                                            $data->tipo_vehiculo,
                                                            $data->conductor,
                                                            $data->propietario,
                                                            $data->id,
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

 



}


?>