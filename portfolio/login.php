<?php 
session_start();
    if($_POST){

        if(($_POST['user']=="matute") && ($_POST['password']=="12345") ){
        $_SESSION['login']=true ;
        

        header("location:index.php");

    }else{
        echo "<script> alert('Usuario o contraseña incorrecta'); </script>";
    }
}


?>

<!doctype html>
<html lang="en">
  <head>
    <title>Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"  integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

</head>
<body>
    <div class="container">

        <div class="row">
            <div class="col-md-4">
                
            </div>
            <div class="col-md-4">
                <br/>
                <div class="card">

                    <div class="card-header">
                        Iniciar Sesion
                    </div>
                    <div class="card-body">
                    <form action="login.php" method="post">
                Username: <input class="form-control" type="text" name="user" id="">
                    <br/>
                Password: <input class="form-control" type="password" name="password" id="">
                    <br/>
                    <button class="btn btn-success" type="submit">Log In</button>
            </form>
                

                    </div>
                    <div class="card-footer text-muted">
                        
                    </div>
                </div>
                
            </div>
            <div class="col-md-4">
                
            </div>
        </div>

    </div>

   
</body>
</html>