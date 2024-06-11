<?php include("conexion.php");?>


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


    <div class="container-fluid py-5">
        <div class="container pt-5 pb-3">
        <div class="text-center mb-3 pb-3">
                <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">Cultivos de coca</h6>
                <h1>Estados de la coca</h1>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="destination-item position-relative overflow-hidden mb-2">
                        <img class="img-fluid" src="img/foto2.png" alt="">
                        <a class="destination-overlay text-white text-decoration-none" href="">
                        <h5 class="text-white">Listo</h5>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="destination-item position-relative overflow-hidden mb-2">
                        <img class="img-fluid" src="img/foto4.png" alt="">
                        <a class="destination-overlay text-white text-decoration-none" href="">
                        <h5 class="text-white">Cosechar</h5> 
                        </a>
                    </div>
                    
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="destination-item position-relative overflow-hidden mb-2">
                        <img class="img-fluid" src="img/foto5.png" alt="">
                        <a class="destination-overlay text-white text-decoration-none" href="">
                        <h5 class="text-white">Trasladar</h5>
                        </a>
                    </div>
                    
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="destination-item position-relative overflow-hidden mb-2">
                        <img class="img-fluid" src="img/foto6.png" alt="">
                        <a class="destination-overlay text-white text-decoration-none" href="">
                        <h5 class="text-white">Pesar</h5>
                        </a>
                    </div>
                    
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="destination-item position-relative overflow-hidden mb-2">
                        <img class="img-fluid" src="img/foto3.png" alt="">
                        <a class="destination-overlay text-white text-decoration-none" href="">
                        <h5 class="text-white">Secar</h5>
                        </a>
                    </div>
                    
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="destination-item position-relative overflow-hidden mb-2">
                        <img class="img-fluid" src="img/foto7.png" alt="">
                        <a class="destination-overlay text-white text-decoration-none" href="">
                            <h5 class="text-white">Vender</h5>
                         
                        </a>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    <!-- Destination Start -->



    <?php 
$consultas="SELECT *FROM  plaga";
$resultado=mysqli_query($con,$consultas);
?>;

 <div class="container-fluid py-5">
        <div class="container pt-5 pb-3">
            <div class="text-center mb-3 pb-3">
                <h1>Plagas o Fito virus</h1>
            </div>
            <div class="row">

                
                
    <div class="table-responsive">
                <table class="table table-primary">
                    <thead>
                        <tr>
                         
                            <th scope="col">Nombre</th>
                            
                            <th scope="col">Descripcion</th>
                            

                        </tr>
                    </thead>
                    <tbody>
                    <?php while ($row =$resultado->fetch_array()){
                     
                        $nom=$row['nombre'];
                        $descripcion=$row['descripcion'];
                        
                        ?>

                        <tr class="">
                            
                            <td><?php  echo $nom ?></td>
                            <td><?php  echo $descripcion ?></td>
                            
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>       

            </div>
        </div>
    </div>
    <!-- Team End -->
    
    <?php 
$consultas="SELECT *FROM  agroquimicos";
$resultado=mysqli_query($con,$consultas);
?>;
    <div class="container-fluid py-5">
        <div class="container pt-5 pb-3">
            <div class="text-center mb-3 pb-3">
                <h1>Agroquímicos</h1>
            </div>
            <div class="row">

                
                
    <div class="table-responsive">
                <table class="table table-primary">
                    <thead>
                        <tr>
                        <th scope="col">Nombre</th>      
                            <th scope="col">Descripcion</th>
                            <th scope="col">Consistencia</th>
                            <th scope="col">Tiempo</th>

                        </tr>
                    </thead>
                    <tbody>
                    <?php while ($row =$resultado->fetch_array()){
                     
                     $nom=$row['nombre'];
                     $descripcion=$row['descripcion'];
                     $consistencia=$row['consistencia'];
                     $tiempo=$row['tiempo'];
                        
                        ?>

                        <tr class="">
                            
                        <td><?php  echo $nom ?></td>
                            <td><?php  echo $descripcion ?></td>
                            <td><?php  echo $consistencia ?></td>
                            <td><?php  echo $tiempo ?></td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>       

            </div>
        </div>
    </div>
    <!-- Team End -->
   

</body>

</html>