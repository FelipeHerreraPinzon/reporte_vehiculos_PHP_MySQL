<?php
include_once('Views/layouts/header.php');
?>


<div> 
<form action="?c=guardarInforme" method="post">
<br>
<br>

<div class="container">
<center>
         <div class="row">
            <div class="col">  
                <input type="hidden" name="id" value="<?php echo $almacenar_informe->id;?>" >
                
        

        <div>
        <h4>SELECCIONA PLACA DEL VEHICULO</h4>
            <select name="placa" id="" class="form-control" required>

            <option disabled selected>SELECCIONA PLACA</option>

            <?php foreach ($this->modelo_informe->cargarPlacas() as $vehiculo):?>

                <option value="<?php echo $vehiculo->id; ?>"<?php echo $vehiculo->id == $almacenar_informe->placa ? 'selected' : '' ?>><?php echo $vehiculo->placa ?></option>

            <?php endforeach  ?>    

            </select>
        </div>  

        <br>

        <div>
        <h4>SELECCIONA MARCA DEL VEHICULO</h4>
            <select name="marca" id="" class="form-control" required>

            <option disabled selected>SELECCIONA MARCA</option>

            <?php foreach ($this->modelo_informe->cargarMarcas() as $vehiculo):?>

                <option value="<?php echo $vehiculo->id; ?>"<?php echo $vehiculo->id == $almacenar_informe->marca ? 'selected' : '' ?>><?php echo $vehiculo->marca ?></option>

            <?php endforeach  ?>    

            </select>
        </div> 
                
        
<br>
        <div>
        <h4>CONDUCTOR</h4>
            <select name="nombre_completo_conductor" id="" class="form-control" required>

            <option disabled selected>SELECCIONA UN CONDUCTOR </option>

            <?php foreach ($this->modelo_informe->cargarConductores() as $conductor):?>

                <option value="<?php echo $conductor->id; ?>"<?php echo $conductor->id == $almacenar_informe->nombre_completo_conductor ? 'selected' : '' ?>><?php echo $conductor->primer_nombre." ".$conductor->apellidos ?></option>

            <?php endforeach  ?>    

            </select>
        </div>    
<br>
        

<div>
            <h4>PROPIETARIO</h4>
            <select name="nombre_completo_propietario" id="" class="form-control" required>

            <option disabled selected>SELECCIONA UN PROPIETARIO </option>

            <?php foreach ($this->modelo_informe->cargarPropietarios() as $propietario):?>

                <option value="<?php echo $propietario->id; ?>"<?php echo $propietario->id == $almacenar_informe->nombre_completo_propietario ? 'selected' : '' ?>><?php echo $propietario->primer_nombre." ".$propietario->apellidos ?></option>

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
 