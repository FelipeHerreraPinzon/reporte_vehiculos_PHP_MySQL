<?php
include_once('Views/layouts/header.php');
?>
<style>
    a{
        color:#ffffff;
        text-decoration:none;
    }
</style>


<div class="container">
    <div class="row">
        
            <div>
            <h1>VEHICULOS</h1>
            </div>
<a href="?c=nuevoVehiculo" class="btn btn-success col-3"><i class="fa-solid fa-circle-plus"></i> REGISTAR VEHICULO</a>   

<table class="table table-bordered table-warning border-dark" >

    <tr>
        <th>ID</th>
        <th>PLACA</th>
        <th>COLOR</th>
        <th>MARCA</th>
        <th>TIPO</th>
        <th>CONDUCTOR</th>
        <th>PROPIETARIO</th>
        <th>EDITAR</th>
        <th>ELIMINAR</th>
    </tr>

<?php foreach($this->modelo_vehiculo->mostrarVehiculos() as $vehiculo) : ?>
   
    <tr>
        
        <td><?php echo $vehiculo->id  ?></td>
        <td><?php echo $vehiculo->placa  ?></td>
        <td style=background-color:<?php echo $vehiculo->color  ?>;><?php echo $vehiculo->color  ?></td>   
        <td><?php echo $vehiculo->marca  ?></td>
        <td><?php echo $vehiculo->tipo_vehiculo  ?></td>
        <td><?php echo $vehiculo->primer_nombre_conductor." ".$vehiculo->apellidos_conductor  ?></td>
        <td><?php echo $vehiculo->primer_nombre_propietario." ".$vehiculo->apellidos_propietario  ?></td>
      
        
        <td>
        <a href="?c=nuevoVehiculo&id=<?php echo $vehiculo->id; ?>" class="btn btn-primary"><i class="fa-solid fa-pen-to-square"></i> EDITAR</a>
        </td>
        <td>
        <button onclick="return confirm('¿¿¿ ELIMINAR ESTE VEHICULO ???')" class="btn btn-danger"><a href="?c=eliminarVehiculo&id=<?php echo $vehiculo->id; ?>"><i class="fa-solid fa-trash-can"></i> ELIMINAR</a></button>
        </td>

    </tr>
    <?php endforeach; ?>

</table>
     
        </div>

    </div>

</div>















<?php
include_once('Views/layouts/footer.php');
?>