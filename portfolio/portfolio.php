<?php include("header.php"); ?>
<br/>

<div class="container">
    <div class="row">
        <div class="col-md-6">
        <div class="card">

<div class="card-header">
    Datos del Proyecto
</div>
<div class="card-body">
<form action="portfolio.php" method="post">

Nombre del proyecto: <input class="form-control" type="text" name="name" id="">
<br/>
Imagen del proyecto: <input class="form-control" type="file" name="file" id="">
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
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>3</td>
            <td>Aplicacion Web</td>
            <td>Imagen.jpg</td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
        </tr>
    </tbody>
</table>

        </div>
        
        
    </div>
</div>



    <?php include("footer.php"); ?>


    