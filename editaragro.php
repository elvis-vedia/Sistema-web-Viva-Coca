<?php include("conexion.php");?>
<?php

$ids=(isset($_GET['ids']))? $_GET['ids']:0;
echo $ids;
if($_POST){
    $cod=$_POST['ide'];
    $nombre=$_POST['nombre'];
    $descri=$_POST['descripcion'];
    $consis=$_POST['consistencia']; 
    $tiempo=$_POST['tiempo']; 
    
    $sql="UPDATE agroquimicos SET nombre = '$nombre', descripcion = '$descri', consistencia = '$consis',tiempo = '$tiempo'   WHERE id =$cod";
    $query=mysqli_query($con,$sql);

   header("location:agroquimico.php");
   
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
<div class="container">
   <div class="row justify-content-center align-items-center g-2">
    <div class="col-md-4">
        <div class="card">
        <div class="card-header">
            REGISTROS DE PLAGAS 
        </div>
            <div class="card-body">
                <form action="editaragro.php " method="post">
                Id : <input class="form-control" type="text" name ="ide" id="" value="<?php echo $ids ?>">  
                    Nombre  : <input class="form-control" type="text" name ="nombre" id=""> 
                    Descripcion : <input class="form-control" type="text" name ="descripcion" id=""> 
                    Consistencia : <input class="form-control" type="text" name ="consistencia" id=""> 
                    Tiempo : <input class="form-control" type="text" name ="tiempo" id=""> 
                    <br>
                    <input class="btn btn-success" type="submit" value ="Actualizar">
                   </form>
                </div>
             <div class="card-footer text-muted">
    
        </div>
    </div>
    </div>