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
            <h1>INFORMES</h1>
            </div>
<a href="?c=nuevoInforme" class="btn btn-success col-3"><i class="fa-solid fa-folder-plus"></i> REGISTAR INFORME</a>   

<table class="table table-bordered table-warning border-dark" >

    <tr>
        <th>ID</th>
        <th>PLACA</th>
        <th>MARCA</th>
        <th>CONDUCTOR</th>
        <th>PROPIETARIO</th>
        <th>EDITAR</th>
        <th>ELIMINAR</th>
    </tr>

<?php foreach($this->modelo_informe->mostrarInformes() as $informe) : ?>

    <tr>
        <td><?php echo $informe->id  ?></td>
        <td><?php echo $informe->placa  ?></td>
        <td><?php echo $informe->marca  ?></td>
        <td><?php echo $informe->primer_nombre_conductor." ".$informe->apellidos_conductor  ?></td>
        <td><?php echo $informe->primer_nombre_propietario." ".$informe->apellidos_propietario  ?></td>
      
        
        <td>
        <a href="?c=nuevoInforme&id=<?php echo $informe->id; ?>" class="btn btn-primary"><i class="fa-sharp fa-solid fa-file-pen"></i> EDITAR</a>
        </td>
        <td>
        <button onclick="return confirm('¿¿¿ ELIMINAR ESTE INFORME ???')" class="btn btn-danger"><a href="?c=eliminarInforme&id=<?php echo $informe->id; ?>"><i class="fa-solid fa-trash-can"></i> ELIMINAR</a></button>
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