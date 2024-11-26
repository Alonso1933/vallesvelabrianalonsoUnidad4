<?php
ob_start() ;
?>

<!-- Iniciar Sesión -->

<?php
include'php/conexion.php';
?>


<?php
if (isset($_POST['aceptar']))
{
include 'php/conexion.php';

$descripcion = $_POST['descripcion'];
$precio= $_POST['precio'];
$stock = $_POST['stock'];
$imagen = addslashes(file_get_contents($_FILES['imagen']['tmp_name']));

$query = "INSERT INTO almacen(imagen,descripcion,precio,stock) VALUES ('$imagen','$descripcion','$precio','$stock')";
$resultado = $cnx->query($query);
header("location:reporte.php");
}

?>
<!DOCTYPE html>
<html>
<head>
  <title>INVENTARIO</title>
  <!-- Font Awesome -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
<!-- Google Fonts -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
<!-- Bootstrap core CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
<!-- Material Design Bootstrap -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">
<!-- JQuery -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>

 
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"> </script>

  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"> </script > 



</head>
<body>
  <nav class="navbar navbar-expand navbar-dark bg-dark">
    
    
        <img src="icono.png" class="md:mt-px xl:mt-2 width-geolocalizacion-logo" width="100" height="100" /></a>
      <a class="navbar-brand" href=""></a>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item">
        <a class="nav-link" href=""> <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="reporte.php"><i class="fas fa-file-invoice"></i>REPORTE DE INVENTARIO<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href=""> <span class="sr-only">(current)</span></a>
      </li>
      <!--
      <li class="nav-item">
        <a class="nav-link" href="reportes.php">REPORTES<span class="sr-only">(current)</span></a>
      </li>
    -->
      <li class="nav-item">
        <a class="nav-link" href="logout.php"><i class="fas fa-power-off"></i>CERRAR SESION<span class="sr-only">(current)</span></a>
      </li>
      </ul>
       
      </div>
    </nav>

    </section>
 <div class="container">

    <div class="container my-3 py-3 z-depth-1" style="background-color: white;">
      <center>
         <p><font face="Fantasy" size="5">Registro De Productos</font></p>
         </center>
  <center>
    <form action="" method="POST" name="formajax" enctype="multipart/form-data">
      <div class="md-form">



    <div class="btn btn-primary btn-sm float-center">
      <span>Elige Un Producto</span>
      <i class="far fa-save pr-2" aria-hidden="true"></i><input type="file" REQUIRED name="imagen"  class=" input-primary" /> 
    </div>
     <div class="md-form">
       <i class="fas fa-edit"></i>
      <input type="text"  REQUIRED name="descripcion" id="descripcion" placeholder="Introduce La descripcion" value="">
      <div class="md-form">
        <i class="fas fa-dollar-sign"></i>
        <input type="int" REQUIRED name="precio" id="precio" placeholder="Introduce El Precio" value="">
      </div>
      <div class="md-form">
        <i class="fas fa-thumbtack"></i>
        <input type="int" name="stock" id="stock" placeholder="Introduce El Stock" value="">
      </div>
      <button type="submit"  name="aceptar" class="btn btn-primary">Subir</button>
    </div>
    </div>
    </form>
</body>
</html>