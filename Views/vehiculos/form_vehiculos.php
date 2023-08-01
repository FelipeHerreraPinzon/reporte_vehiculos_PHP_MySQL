<?php
include_once('Views/layouts/header.php');
?>


<div> 
<form action="?c=guardarVehiculo" method="post">

<div class="container">
<center>
         <div class="row">
            <div class="col">  
                <input type="hidden" name="id" value="<?php echo $almacenar_vehiculo->id;?>" >
                <br>
                <h4>PLACA: </h4>
                <input type="text" name="placa" placeholder="INGRESA PLACA DEL VEHICULO" value="<?php echo $almacenar_vehiculo->placa;?>" class="form-control" required>
                <br>
                <h4>SELECCIONA MARCA DEL VEHICULO</h4>
                <select name="marca" class="form-control" required>
                   
                    <option selected value="<?php echo $almacenar_vehiculo->marca;?>"><?php echo $almacenar_vehiculo->marca;?> </option>
                    <option value="CHEVROLET">CHEVROLET</option>
                    <option value="FORD">FORD</option>
                    <option value="NISSAN">NISSAN</option>
                    <option value="TOYOTA">TOYOTA</option>
                    <option value="RENAULT">RENAULT</option>
                    <option value="JAC">JAC</option>

                </select>
                <br>
                <h4>SELECCIONA TIPO DEL VEHICULO</h4>
                <select name="tipo_vehiculo" class="form-control" required>

                    <option selected value="<?php echo $almacenar_vehiculo->tipo_vehiculo;?>"><?php echo $almacenar_vehiculo->tipo_vehiculo;?> </option>
                    <option value="publico">PUBLICO</option>
                    <option value="privado">PRIVADO</option>
                </select>
            </div> 
        </div>
<br>
<br>
                <h4>SELECCIONA COLOR DEL VEHICULO</h4>
                <input type="color" name="color" value="<?php echo $almacenar_vehiculo->color;?>">
                <br>
        <div>
        <h4>CONDUCTOR</h4>
            <select name="conductor" id="" class="form-control" required>

            <option disabled selected>SELECCIONA UN CONDUCTOR </option>
          
            <?php foreach ($this->modelo_vehiculo->cargarConductores() as $conductor):?>
               
                <option value="<?php echo $conductor->id; ?>"<?php echo $conductor->id == $almacenar_vehiculo->conductor ? 'selected' : '' ?>><?php echo $conductor->primer_nombre." ".$conductor->apellidos ?></option>

            <?php endforeach  ?>    

            </select>
        </div>    
<br>
        

<div>
           <h4>PROPIETARIO</h4>
            <select name="propietario" id="" class="form-control" required>

            <option selected disabled>SELECCIONA UN PROPIETARIO </option>

            <?php foreach ($this->modelo_vehiculo->cargarPropietarios() as $propietario):?>

                <option value="<?php echo $propietario->id; ?>"<?php echo $propietario->id == $almacenar_vehiculo->propietario ? 'selected' : '' ?>><?php echo $propietario->primer_nombre." ".$propietario->apellidos ?></option>

            <?php endforeach  ?>    

            </select>
        </div>  

        <br>
        
        <br>
        <input type="submit" value="GUARDAR" class="btn btn-success fs-3 fw-bolder" name="btn_guardar">

        </center>

    </div>



 </form>
 </div>  
 