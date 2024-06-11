<?php include("registros.php");?>
<?php include("conexion.php");?>
<?php 
if($_POST){
    $nombre=$_POST['nombre'];
    $descripcion=$_POST['descripcion'];

    $sql="INSERT INTO plaga VALUES (NULL, '$nombre','$descripcion')";
    $query=mysqli_query($con,$sql);
    if($query){
        echo "<script> alert('correcto'); </script>"; 
    }else{
        echo "<script> alert('incorrecto'); </script>"; 
    }

}

if($_GET){
    $id=$_GET['borrar'];
    $sql="DELETE FROM plaga WHERE `plaga`.`id` = $id";
    $query=mysqli_query($con,$sql);

}

?>
<?php 
$consultas="SELECT *FROM  plaga";
$resultado=mysqli_query($con,$consultas);
?>;


<div class="container">
   <div class="row">
    <div class="col-md-4">
        <div class="card">
        <div class="card-header">
            REGISTROS DE PLAGAS 
        </div>
            <div class="card-body">
                <form action="plaga.php " method="post">
                    Nombre  : <input class="form-control" type="text" name ="nombre" id=""> 
                    Descripcion : <input class="form-control" type="text" name ="descripcion" id=""> 
                    <br>
                    <input class="btn btn-success" type="submit" value ="registrar">
                   </form>
                </div>
             <div class="card-footer text-muted">
    
        </div>
    </div>
    </div>
    <div class="col-md-8">
         <!---bs5-table-default---->
            <div class="table-responsive">
                <table class="table table-primary">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Nombre</th>
                            
                            <th scope="col">Descripcion</th>
                            <th scope="col">Eliminar</th>
                            <th scope="col">Editar</th>

                        </tr>
                    </thead>
                    <tbody>
                    <?php while ($row =$resultado->fetch_array()){
                        $id=$row['id'];
                        $nom=$row['nombre'];
                        $descripcion=$row['descripcion'];
                        
                        ?>

                        <tr class="">
                            <td scope="row"><?php  echo $id ?></td>
                            <td><?php  echo $nom ?></td>
                            <td><?php  echo $descripcion ?></td>
                            <td><a class="btn btn-danger" href="?borrar=<?php echo $id; ?>"> Eliminar</a></td>
                            <td><a class="btn btn-warning" href="editarplaga.php? ids= <?php echo $id ?>"> Editar</a></td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>   
    </div>
</div>
<?php include("pie.php"); ?>s