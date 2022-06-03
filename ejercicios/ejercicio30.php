 <?php
 
 session_start();
 
$_SESSION["usuario"]="Matute";
$_SESSION["status"]="logged in";

echo "Sesion iniciada"."<br/>";

echo $_SESSION["usuario"]." status: ".$_SESSION["status"];




 ?>