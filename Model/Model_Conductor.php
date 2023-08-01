<?php

class ModelConductor{

    public $conexion;

  

    //////////////  ATRIBUTOS CONDUCTOR  /////////////////////
    public $id;
    public $documento;
    public $primer_nombre;
    public $segundo_nombre;
    public $apellidos;
    public $direccion;
    public $telefono;
    public $ciudad;

    


    public  function __construct(){
       try{
        $this->conexion = Conexion::conectar();
       }catch(Exception $e){
        die($e->getMessage());
       }

    }
    
    

   ////////////////// METODOS CONDUCTOR //////////////////

   public function mostrarConductores(){

    try{
        $query = "SELECT * FROM conductores";
                  
    
    $stmt = $this->conexion->prepare($query);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_OBJ);
    }catch(Exception $e){
        die($e->getMessage());
    }
    }

    public function borrarConductor($id){

        try{
            $query="DELETE FROM conductores WHERE id=?";

            $stmt = $this->conexion->prepare($query);
            $stmt->execute(array($id));
        }catch(Exception $e){
            die($e->getMessage());
        }

    }

    public function cargarIdConductor($id){

        try{
            $query="SELECT * FROM conductores WHERE id=?";

            $stmt = $this->conexion->prepare($query);
            $stmt->execute(array($id));
            return $stmt->fetch(PDO::FETCH_OBJ);
        }catch(Exception $e){
            die($e->getMessage());
        }

    }

    public function registrarConductor($data){

        try{
            $query="INSERT INTO conductores (documento, primer_nombre, segundo_nombre, apellidos, direccion, telefono, ciudad)
            VALUES (?, ?, ?, ?, ?, ?, ?)";

            $this->conexion->prepare($query)->execute(array($data->documento,
                                                            $data->primer_nombre,
                                                            $data->segundo_nombre,
                                                            $data->apellidos,
                                                            $data->direccion,
                                                            $data->telefono,
                                                            $data->ciudad
                                                            
                                                     
            ));

        }catch(Exception $e){
            die($e->getMessage());
        }

    } 

    public function actualizarConductor($data){

        try{
            $query="UPDATE  conductores SET documento=?, primer_nombre=?, segundo_nombre=?, apellidos=?, direccion=?, telefono=?, ciudad=?
            WHERE id=?";

            $this->conexion->prepare($query)->execute(array($data->documento,
                                                            $data->primer_nombre,
                                                            $data->segundo_nombre,
                                                            $data->apellidos,
                                                            $data->direccion,
                                                            $data->telefono,
                                                            $data->ciudad,
                                                            $data->id,
            ));

        }catch(Exception $e){
            die($e->getMessage());
        }

    } 



 



}


?>