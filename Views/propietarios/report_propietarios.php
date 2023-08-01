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
            <h1>PROPIETARIOS</h1>
            </div>
<a href="?c=nuevoPropietario" class="btn btn-success col-3"><i class="fa-solid fa-user-plus"></i> REGISTAR PROPIETARIO</a>   

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

<?php foreach($this->modelo_propietario->mostrarPropietarios() as $propietario) : ?>

    <tr>
        <td><?php echo $propietario->id  ?></td>
        <td><?php echo $propietario->documento  ?></td>
        <td><?php echo $propietario->primer_nombre  ?></td>
        <td><?php echo $propietario->segundo_nombre  ?></td>
        <td><?php echo $propietario->apellidos  ?></td>
        <td><?php echo $propietario->direccion  ?></td>
        <td><?php echo $propietario->telefono  ?></td>
        <td><?php echo $propietario->ciudad  ?></td>
        
      
        
        <td>
        <a href="?c=nuevoPropietario&id=<?php echo $propietario->id; ?>" class="btn btn-primary"><i class="fa-solid fa-user-pen"></i> EDITAR</a>
        </td>
        <td>
        <button onclick="return confirm('¿¿¿ ELIMINAR ESTE PROPIETARIO ???')" class="btn btn-danger"><a href="?c=eliminarPropietario&id=<?php echo $propietario->id; ?>"><i class="fa-solid fa-trash-can"></i> ELIMINAR</a></button>
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