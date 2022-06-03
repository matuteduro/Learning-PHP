<?php include("header.php"); ?>
<?php include("conexion.php");?>
<?php

if($_POST){
print_r($_POST);
$nombre = $_POST['nombre'];
$objConexion= new conexion();

$sql="INSERT INTO `proyectos` (`id`, `nombre`, `imagen`, `descripcion`) VALUES (NULL,'.$nombre.', '', 'Es uno de los primeros proyectos');";

$objConexion->ejecutar($sql);
}

$objConexion= new conexion();
$proyectos=$objConexion->consultar("SELECT * FROM `proyectos`");

?>
<br/>

<div class="container">
    <div class="row">
        <div class="col-md-6">
        <div class="card">

<div class="card-header">
    Datos del Proyecto
</div>
<div class="card-body">
<form action="portfolio.php" method="post" enctype="multipart/form-data">

Nombre del proyecto: <input class="form-control" type="text" name="nombre" id="">
<br/>
Imagen del proyecto: <input class="form-control" type="file" name="archivo" id="">
<br/>

<input class="btn btn-success" type="submit" value="Enviar Proyecto">

</form>  
        
</div>

</div>
        </div>
        <div class="col-md-6">
        <table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Imagen</th>
            <th>Descripcion</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($proyectos as $proyecto){?>
        <tr>
        <td><?php echo $proyecto['id'] ?></td>
        <td><?php echo $proyecto['nombre'] ?></td>
        <td><?php echo $proyecto['imagen'] ?></td>
        <td><?php echo $proyecto['descripcion'] ?></td>
        <td> <a name="" id="" class="btn btn-danger" href="#" role="button">Eliminar</a> </td>
        </tr>
    <?php } ?>
    </tbody>
</table>

        </div>
        
        
    </div>
</div>



    <?php include("footer.php"); ?>


    