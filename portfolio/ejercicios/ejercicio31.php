<?php

$txtNombre="";
$chkphp="";
$chkhtml="";
$chkcss="";
$rdgLenguaje="";
$lsAnime="";
$txtComentario="";
if ($_POST){

    $txtNombre= (isset($_POST['txtNombre']))?$_POST['txtNombre']:"";
    $rdgLenguaje= (isset($_POST['lenguaje']))?$_POST['lenguaje']:"";

    $chkphp= (isset($_POST['chkphp'])=="si")?"checked":"";
    $chkhtml= (isset($_POST['chkhtml'])=="si")?"checked":"";
    $chkcss= (isset($_POST['chkcss'])=="si")?"checked":"";

    $lsAnime=(isset($_POST['lsAnime']))?$_POST['lsAnime']:"";

    $txtComentario= (isset($_POST['txtComentario']))?$_POST['txtComentario']:"";

// Instruccion de insertar

//rutina de algun calculo

//aqui puedes alterar esos valores para mostrar diferentes valores modificados
    

   

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
    <strong>Hola: </strong><?php echo $txtNombre;?>
    <br/>
    <strong>Tu lenguaje es: </strong><?php echo $rdgLenguaje;?>
    <br/>
    <strong>Estas Aprendiendo: </strong>
    - <?php echo ($chkphp=="checked")?"php":"";?><br/>
    - <?php echo ($chkhtml=="checked")?"html":"";?><br/>
    - <?php echo ($chkcss=="checked")?"css":"";?><br/>
    <br/>
    <strong>Tu anime favorito es: </strong><?php echo $lsAnime;?>
    <br/>
    <strong>Tu mensaje es: </strong><?php echo $txtComentario?>

    <?php } ?>

    <form action="ejercicio31.php" method="post">
    Nombre:<br/>
    <input value="<?php echo $txtNombre;?>" type="text" name="txtNombre" id="">
    <br/>
    Te gusta?:<br/>
    <br/>php: <input type="radio" <?php echo ($rdgLenguaje=="php")?"checked":"";?> name="lenguaje" value="php" id=""><br/>
    <br/>html: <input type="radio" <?php echo ($rdgLenguaje=="html")?"checked":"";?>name="lenguaje" value="html" id=""><br/>
    <br/>css: <input type="radio" <?php echo ($rdgLenguaje=="css")?"checked":"";?> name="lenguaje" value="css" id=""><br/>

    Estas aprendiendo..<br/>
    <br/>php:<input type="checkbox"  <?php echo $chkphp;?> name="chkphp" value="si" id="">
    <br/>html:<input type="checkbox" <?php echo $chkhtml; ?> name="chkhtml" value="si" id="">
    <br/>css:<input type="checkbox" <?php echo $chkcss; ?> name="chkcss" value="si" id="">

    <br/>Que anime te gusta...?<br/>
    <select name="lsAnime" id="" ><br/>
        <option value="">[Ninguna Serie]</option>
        <option value="onepiece" <?php echo ($lsAnime=="onepiece")?"selected":"";?>>[One Piece]</option>
        <option value="bleach" <?php echo ($lsAnime=="bleach")?"selected":"";?>>[Bleach]</option>
        <option value="naruto" <?php echo ($lsAnime=="naruto")?"selected":"";?>>[Naruto]</option><br/>

        <br/> Tienes alguna duda? <br/>

        <br/><textarea name="txtComentario" id="" cols="30" rows="10"></textarea>
        <? echo $txtComentario?>
        <br/>
        <br/><input type="submit" value="Enviar Informacion"><br/>


    </form>
</body>
</html>