<?php

class Controller{
    
    public $modelo_vehiculo;
    public $modelo_conductor;
    public $modelo_propietario;
    public $modelo_informe;

    public function __construct(){
        $this->modelo_vehiculo = new ModelVehiculo();
        $this->modelo_conductor = new ModelConductor();
        $this->modelo_propietario = new ModelPropietario();
        $this->modelo_informe = new ModelInforme();
    }

    //  FUNCIONES FRONT CONTROLLER   /////////
    public function vehiculos(){
        include_once ('Views/vehiculos/report_vehiculos.php');
    }
    public function propietarios(){
        include_once ('Views/propietarios/report_propietarios.php');
    }
    public function conductores(){
        include_once ('Views/conductores/report_conductores.php');
    }
    public function informes(){
        include_once ('Views/informes/report_informes.php');
    }
    


   ///////  CONTROLADORES VEHICULOS  /////////////////

    public function nuevoVehiculo(){
        $almacenar_vehiculo = new ModelVehiculo();
        if(isset($_REQUEST['id'])){
           $almacenar_vehiculo = $this->modelo_vehiculo->cargarIdVehiculo($_REQUEST['id']);
        }
        include_once ('Views/vehiculos/form_vehiculos.php');
    }


    public function guardarVehiculo(){
        
        $almacenar_vehiculo = new ModelVehiculo();
        $almacenar_vehiculo->id = $_POST['id'];
        $almacenar_vehiculo->placa = $_POST['placa'];
        $almacenar_vehiculo->color = $_POST['color'];
        $almacenar_vehiculo->marca = $_POST['marca'];
        $almacenar_vehiculo->tipo_vehiculo = $_POST['tipo_vehiculo'];
        $almacenar_vehiculo->conductor = $_POST['conductor'];
        $almacenar_vehiculo->propietario = $_POST['propietario'];
    
       
        

        $almacenar_vehiculo->id > 0 ? $this->modelo_vehiculo->actualizarVehiculo($almacenar_vehiculo) : $this->modelo_vehiculo->registrarVehiculo($almacenar_vehiculo );
        
        header("Location: index.php");
    }

    public function eliminarVehiculo(){
        $this->modelo_vehiculo->borrarVehiculo($_REQUEST['id']);

        header("Location: index.php");
    }

    
   ///////  CONTROLADORES PROPIETARIO  /////////////////

   public function nuevoPropietario(){
    $almacenar_propietario = new ModelPropietario();
    if(isset($_REQUEST['id'])){
       $almacenar_propietario = $this->modelo_propietario->cargarIdPropietario($_REQUEST['id']);
    }
    include_once ('Views/propietarios/form_propietarios.php');
}


public function guardarPropietario(){
    
    $almacenar_propietario = new ModelPropietario();
    $almacenar_propietario->id = $_POST['id'];
    $almacenar_propietario->documento = $_POST['documento'];
    $almacenar_propietario->primer_nombre = $_POST['primer_nombre'];
    $almacenar_propietario->segundo_nombre = $_POST['segundo_nombre'];
    $almacenar_propietario->apellidos = $_POST['apellidos'];
    $almacenar_propietario->direccion = $_POST['direccion'];
    $almacenar_propietario->telefono = $_POST['telefono'];
    $almacenar_propietario->ciudad = $_POST['ciudad'];
   
   
    

    $almacenar_propietario->id > 0 ? $this->modelo_propietario->actualizarPropietario($almacenar_propietario) : $this->modelo_propietario->registrarPropietario($almacenar_propietario);
    
    //header("Location: index.php");
    include_once ('Views/propietarios/report_propietarios.php');
}

public function eliminarPropietario(){
    $this->modelo_propietario->borrarPropietario($_REQUEST['id']);

    //header("Location: index.php");
    include_once ('Views/propietarios/report_propietarios.php');
}


   
 ///////  CONTROLADORES CONDUCTOR  /////////////////

 public function nuevoConductor(){
    $almacenar_conductor = new ModelConductor();
    if(isset($_REQUEST['id'])){
       $almacenar_conductor = $this->modelo_conductor->cargarIdConductor($_REQUEST['id']);
    }
    include_once ('Views/conductores/form_conductores.php');
}


public function guardarConductor(){
    
    $almacenar_conductor = new ModelPropietario();
    $almacenar_conductor->id = $_POST['id'];
    $almacenar_conductor->documento = $_POST['documento'];
    $almacenar_conductor->primer_nombre = $_POST['primer_nombre'];
    $almacenar_conductor->segundo_nombre = $_POST['segundo_nombre'];
    $almacenar_conductor->apellidos = $_POST['apellidos'];
    $almacenar_conductor->direccion = $_POST['direccion'];
    $almacenar_conductor->telefono = $_POST['telefono'];
    $almacenar_conductor->ciudad = $_POST['ciudad'];
   
   
    

    $almacenar_conductor->id > 0 ? $this->modelo_conductor->actualizarConductor($almacenar_conductor) : $this->modelo_conductor->registrarConductor($almacenar_conductor);
    
    //header("Location: index.php");
    include_once ('Views/conductores/report_conductores.php');
}

public function eliminarConductor(){
    $this->modelo_conductor->borrarConductor($_REQUEST['id']);

    //header("Location: index.php");
    include_once ('Views/conductores/report_conductores.php');
}


    
///////  CONTROLADORES INFORME  /////////////////

public function nuevoInforme(){
    $almacenar_informe = new ModelInforme();
    if(isset($_REQUEST['id'])){
       $almacenar_informe = $this->modelo_informe->cargarIdInforme($_REQUEST['id']);
    }
    include_once ('Views/informes/form_informes.php');
}


public function guardarInforme(){
    
    $almacenar_informe = new ModelInforme();
    $almacenar_informe->id = $_POST['id'];
    $almacenar_informe->placa = $_POST['placa'];
    $almacenar_informe->marca = $_POST['marca'];
    $almacenar_informe->nombre_completo_propietario = $_POST['nombre_completo_propietario'];
    $almacenar_informe->nombre_completo_conductor = $_POST['nombre_completo_conductor'];
    
   
   
    

    $almacenar_informe->id > 0 ? $this->modelo_informe->actualizarInforme($almacenar_informe) : $this->modelo_informe->registrarInforme($almacenar_informe);
    
    //header("Location: index.php");
    include_once ('Views/informes/report_informes.php');
}

public function eliminarInforme(){
    $this->modelo_informe->borrarInforme($_REQUEST['id']);

    //header("Location: index.php");
    include_once ('Views/informes/report_informes.php');
}


   

   
      


        


}
?>