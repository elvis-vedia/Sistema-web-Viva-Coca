<?php include("conexion.php");?>

<?php

session_start(); 

if ($_POST){
 
    $usu=$_POST['usuario'];
    $passs=$_POST['contraseña'];

    if(isset($_POST['ingre']))
    {

        $sql="SELECT* FROM usuario where usuario='$usu' and contraseña='$passs'";
        $result=mysqli_query($con,$sql);

        if ($fila=mysqli_fetch_assoc($result)) {
            header("location:registros.php");
        }   
        else{
            echo "<script> alert('Incorrecto'); </script>"; 
        }
        
        
    }
    
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Detección de plagas o Fito Virus</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet"> 

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Topbar Start -->
    <div class="container-fluid bg-light pt-3 d-none d-lg-block">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 text-center text-lg-left mb-2 mb-lg-0">
                    <div class="d-inline-flex align-items-center">
                        
                    </div>
                </div>
                <div class="col-lg-6 text-center text-lg-right">
                    <div class="d-inline-flex align-items-center">
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid position-relative nav-bar p-0">
        <div class="container-lg position-relative p-0 px-lg-3" style="z-index: 9;">
            <nav class="navbar navbar-expand-lg bg-light navbar-light shadow-lg py-3 py-lg-0 pl-3 pl-lg-5">
                <a href="" class="navbar-brand">
                    <h1 class="m-0 text-primary"><span class="text-dark">VIVA</span>COCA</h1>
                </a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between px-3" id="navbarCollapse">
                    <div class="navbar-nav ml-auto py-0">
                        <a href="index.php" class="nav-item nav-link ">CONSULTAR</a>
                        <a href="informacion.php" class="nav-item nav-link">INFORMACIÓN </a>
                        <a href="login.php" class="nav-item nav-link">INICIAR SESIÓN </a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->



<br >
<br>

<!---bs5-card-header-foot---->
<div class="container">
        <!---bs5-grid-col---->
        <div class="row justify-content-center align-items-center g-2">
            <div class="col-3      ">
                <br>
            <div class="card">
            <div class="card-header">
            <h4>INICIO DE SESIÓN </h4>
        </div>
        <div class="card-body">

        <form action="login.php " method="post">

            Usuario : <input class="form-control" type="text" name ="usuario" id="">    <br>
            Contraseña : <input class="form-control" type="password" name ="contraseña" id=""> <br>
            <center><input class="btn btn-success" type="submit"name="ingre" value="Ingresar"></center>
            
             
        </form>

        </div>
        <div class="card-footer text-muted">
        
        </div>
    </div>
    </div>
            </div>
        </div>
</body>

</html>