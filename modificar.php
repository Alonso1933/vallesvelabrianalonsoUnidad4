<!DOCTYPE html>
<html>
<head>
	<title>MODIFICAR PRODUCTO</title>
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

  <!-- icono de la pagina -->
  

  <script src="https://code.jquery.com/jquery-3.5.1.min.js"> </script>

  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"> </script > 
</head>
<body>
	<nav class="navbar navbar-expand navbar-dark bg-dark">
    
    
        <img src="icono.png" class="md:mt-px xl:mt-2 width-geolocalizacion-logo" width="100" height="100" /></a>
      <a class="navbar-brand" href="alumnos.php"></a>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item">
        <a class="nav-link" href="inventario.php"><i class="fas fa-cloud-upload-alt"></i>SUBIR INVENTARIO <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="reporte.php"><i class="fas fa-undo"></i>REGRESAR<span class="sr-only">(current)</span></a>
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
    <!--Section: Content-->


  </div>
</div>
</section>
				<?php
					include 'php/conexion.php';
					$id = $_REQUEST['id'];
					$query="SELECT * FROM almacen WHERE id='$id'";
					$resultado = $cnx->query($query);
					$row= $resultado->fetch_assoc();
					
					?>




<div class="container">

    <div class="container my-3 py-3 z-depth-1" style="background-color: white;">
<center>
         <p><font face="Fantasy" size="5">ACTUALIZAR INFORMACION</font></p>
         </center>
	<center>
		<form action="proceso_modificar.php?id=<?php echo $row['id']; ?>" method="POST" enctype="multipart/form-data">
      <div class="md-form">
    <i class="fas fa-tasks"></i>
      <input type="text"   REQUIRED name="descripcion"  placeholder="DESCRIPCIÓN" value="">
    </div>
			<div class="md-form">
		<i class="fas fa-dollar-sign"></i>
			<input type="text"   REQUIRED name="precio"  placeholder="PRECIO " value="">
		</div>
     <div class="md-form">
     	<i class="fas fa-thumbtack"></i>
         <input type="text"   REQUIRED name="stock" id="stock" placeholder="STOCK DISPONIBLE" value="">
       </div>
			<button type="submit"  name="aceptar" class="btn btn-primary" value="aceptar">Subir</button>
    
		</div>
		</form>
	</center>
</div>
</div>


</body>
</html>