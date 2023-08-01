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
            <h1>CONDUCTORES</h1>
            </div>
<a href="?c=nuevoConductor" class="btn btn-success col-3"><i class="fa-solid fa-user-plus"></i> REGISTAR CONDUCTOR</a>   

<table class="table table-bordered table-warning border-dark" >

    <tr>
        <th>ID</th>
        <th>DOCUMENTO</th>
        <th>PRIMER NOMBRE</th>
        <th>SEGUNDO NOMBRE</th>
        <th>APELLIDOS</th>
        <th>DIRECCION</th>
        <th>TELEFONO</th>
        <th>CIUDAD</th>
        <th>EDITAR</th>
        <th>ELIMINAR</th>
    </tr>

<?php foreach($this->modelo_conductor->mostrarConductores() as $conductor) : ?>

    <tr>
        <td><?php echo $conductor->id  ?></td>
        <td><?php echo $conductor->documento  ?></td>
        <td><?php echo $conductor->primer_nombre  ?></td>
        <td><?php echo $conductor->segundo_nombre  ?></td>
        <td><?php echo $conductor->apellidos  ?></td>
        <td><?php echo $conductor->direccion  ?></td>
        <td><?php echo $conductor->telefono  ?></td>
        <td><?php echo $conductor->ciudad  ?></td>
        
      
        
        <td>
        <a href="?c=nuevoConductor&id=<?php echo $conductor->id; ?>" class="btn btn-primary"><i class="fa-solid fa-user-pen"></i> EDITAR</a>
        </td>
        <td>
        <button onclick="return confirm('¿¿¿ ELIMINAR ESTE CONDUCTOR ???')" class="btn btn-danger"><a href="?c=eliminarConductor&id=<?php echo $conductor->id; ?>"><i class="fa-solid fa-trash-can"></i> ELIMINAR</a></button>
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