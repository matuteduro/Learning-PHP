<?php

$txtNombre="";
$chkphp="";
$chkhtml="";
$chkcss="";
$rdgLenguaje="";

if ($_POST){

    $txtNombre= (isset($_POST['txtNombre']))?$_POST['txtNombre']:"";
    $rdgLenguaje= (isset($_POST['lenguaje']))?$_POST['lenguaje']:"";

    $rdgLenguaje= (isset($_POST['chkphp'])=="si")?"checked":"";
    $rdgLenguaje= (isset($_POST['chkhtml'])=="si")?"checked":"";
    $rdgLenguaje= (isset($_POST['chkcss'])=="si")?"checked":"";


    

}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
    <?php if($_POST){?>
    <strong>Hola</strong>: <?php echo $txtNombre;"<br/>"?>
    <br/>
    <strong>Le Gusta</strong>: <?php echo $rdgLenguaje;?>
    <?php } ?>
    <form action="ejercicio31.php" method="post">
    Nombre:<br/>
    <input value="<?php echo $txtNombre;?>" type="text" name="txtNombre" id="">
    <br/>
    Te gusta?:<br/>
    <br/>PHP: <input type="radio" <?php echo ($rdgLenguaje=="php")?"checked":""?> name="lenguaje" value="php" id=""><br/>
    <br/>HTML: <input type="radio" <?php echo ($rdgLenguaje=="html")?"checked":""?>name="lenguaje" value="html" id=""><br/>
    <br/>CSS: <input type="radio" <?php echo ($rdgLenguaje=="css")?"checked":""?> name="lenguaje" value="css" id=""><br/>

    Estas aprendiendo..<br/>
    <br/><input type="checkbox"  <?php echo $chkphp ?> name="chkphp" value="Si" id="">
    <br/><input type="checkbox" <?php echo $chkhtml ?> name="chkhtml" value="Si" id="">
    <br/><input type="checkbox" <?php echo $chkcss ?> name="chkcss" value="Si" id="">

    <input type="submit" value="Enviar Informacion">


    </form>
</body>
</html>