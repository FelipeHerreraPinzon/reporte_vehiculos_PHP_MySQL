<?php

class ModelPropietario{

    public $conexion;

  

    //////////////  ATRIBUTOS PROPIETARIO  /////////////////////
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
    
    

   ////////////////// METODOS PROPIETARIO //////////////////

   public function mostrarPropietarios(){

    try{
        $query = "SELECT * FROM propietarios";
                  
    
    $stmt = $this->conexion->prepare($query);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_OBJ);
    }catch(Exception $e){
        die($e->getMessage());
    }
    }

    public function borrarPropietario($id){

        try{
            $query="DELETE FROM propietarios WHERE id=?";

            $stmt = $this->conexion->prepare($query);
            $stmt->execute(array($id));
        }catch(Exception $e){
            die($e->getMessage());
        }

    }

    public function cargarIdPropietario($id){

        try{
            $query="SELECT * FROM propietarios WHERE id=?";

            $stmt = $this->conexion->prepare($query);
            $stmt->execute(array($id));
            return $stmt->fetch(PDO::FETCH_OBJ);
        }catch(Exception $e){
            die($e->getMessage());
        }

    }

    public function registrarPropietario($data){

        try{
            $query="INSERT INTO propietarios (documento, primer_nombre, segundo_nombre, apellidos, direccion, telefono, ciudad)
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

    public function actualizarPropietario($data){

        try{
            $query="UPDATE  propietarios SET documento=?, primer_nombre=?, segundo_nombre=?, apellidos=?, direccion=?, telefono=?, ciudad=?
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