<?php
include_once('Views/layouts/header.php');
?>





 <div> 
<form action="?c=guardarConductor" method="post">
<br>
<br>

<div class="container">
<center>
         <div class="row">
            <div class="col">  
                <input type="hidden" name="id" value="<?php echo $almacenar_conductor->id;?>" >
                <input type="number" name="documento" placeholder="documento conductor" class="form-control" value="<?php echo $almacenar_conductor->documento;?>" required>
<br>

                <input type="text" name="primer_nombre" placeholder="primer nombre conductor" class="form-control" value="<?php echo $almacenar_conductor->primer_nombre;?>" required>
<br>

                <input type="text" name="segundo_nombre" placeholder="segundo nombre conductor" class="form-control" value="<?php echo $almacenar_conductor->segundo_nombre;?>" required>
<br>

                <input type="text" name="apellidos" placeholder="apellidos conductor" class="form-control" value="<?php echo $almacenar_conductor->apellidos;?>" required>
<br>

                <input type="text" name="direccion" placeholder="direccion conductor" class="form-control" value="<?php echo $almacenar_conductor->direccion;?>" required>
<br>

                <input type="number" name="telefono" placeholder="telefono conductor" class="form-control" value="<?php echo $almacenar_conductor->telefono;?>" required>
<br>

                <input type="text" name="ciudad" placeholder="ciudad conductor" class="form-control" value="<?php echo $almacenar_conductor->ciudad;?>" required>
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