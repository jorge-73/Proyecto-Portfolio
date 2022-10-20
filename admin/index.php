<?php
session_start();

if ($_POST) {
    if(($_POST['usuario']=="JorgitoPHP")&&($_POST['password']=="sistema")){
        $_SESSION['usuario']="ok";
        $_SESSION['nombreUsuario']="JorgitoPHP";
        
        header('location:admin.php');
    }else {
        $mensaje="Error: Usuario o Contraseña incorrectos";
    }
}
?>


<!doctype html>
<html lang="en">

<head>
  <title>Administrador</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/style.css">
</head>

<body>
  
    <div class="container">
        <div class="row">

            <div class="col-md-4"></div>

            <div class="col-md-4">
                <br><br><br>
                <div class="card" id="card-login">
                    <div class="card-header text-center bg-dark">
                        <h4>Login</h4>
                    </div>
                    <div class="card-body">
                        <?php if(isset($mensaje)){ ?>
                        <div class="alert alert-danger" role="alert">    
                            <strong><?php echo $mensaje; ?></strong>
                        </div>
                        <?php } ?>
                        <form action="index.php" method="post">
                            <div class="form-group">
                                <label for="usuario" class="form-label">Username: </label>
                                <input type="text" class="form-control" name="usuario" id="usuario" placeholder="Enter your username" required>
                            </div>
                            <div class="form-group">
                                <label for="password" class="form-label">Password: </label>
                                <input type="password" class="form-control" name="password" id="password" placeholder="Enter your password" required>
                            </div><br>
                            <input type="submit" name="btn" id="btn" value="Ingresar al Admin" class="btn btn-outline-dark d-block mx-auto rounded-4">
                        </form>

                    </div>

                </div>    

            </div>
            
        </div>
    </div>

 
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>