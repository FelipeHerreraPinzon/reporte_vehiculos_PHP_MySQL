<?php
include_once('Views/layouts/header.php');
?>


 <div> 
<form action="?c=guardarPropietario" method="post">
<br>
<br>

<div class="container">
<center>
         <div class="row">
            <div class="col">  
                <input type="hidden" name="id" value="<?php echo $almacenar_propietario->id;?>" >
                <input type="number" name="documento" placeholder="documento propietario" class="form-control" value="<?php echo $almacenar_propietario->documento;?>" required>
<br>

                <input type="text" name="primer_nombre" placeholder="primer nombre propietario" class="form-control" value="<?php echo $almacenar_propietario->primer_nombre;?>" required>
<br>

                <input type="text" name="segundo_nombre" placeholder="segundo nombre propietario" class="form-control" value="<?php echo $almacenar_propietario->segundo_nombre;?>" required>
<br>

                <input type="text" name="apellidos" placeholder="apellidos propietario" class="form-control" value="<?php echo $almacenar_propietario->apellidos;?>" required>
<br>

                <input type="text" name="direccion" placeholder="direccion propietario" class="form-control" value="<?php echo $almacenar_propietario->direccion;?>" required>
<br>

                <input type="number" name="telefono" placeholder="telefono propietario" class="form-control" value="<?php echo $almacenar_propietario->telefono;?>" required>
<br>

                <input type="text" name="ciudad" placeholder="ciudad propietario" class="form-control" value="<?php echo $almacenar_propietario->ciudad;?>" required>
                <br>
                <br>
                <input type="submit" value="ENVIAR" name="btn_guardar" class="btn btn-success fs-3 fw-bolder">
            </div> 
        </div>
<br>
        

      
        

        </center>

    </div>



 </form>
 </div>  



 <?php
include_once('Views/layouts/footer.php');
?>