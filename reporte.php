<!DOCTYPE html>
<html>
<head>
  <title>REPORTE DE INVENTARIO</title>
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
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>



</head>
<script type="text/javascript">
  
  function Confirmdelete(){

    var respuesta = confirm("¿quieres eliminar este producto?");
    if(respuesta==true){
      return true;
    }
    else{
      return false;
    }
    }
</script>
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
        <a class="nav-link" href=""><span class="sr-only">(current)</span></a>
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
    <div class="table-responsive " style="background-color: white;">
  <center>
    <table class="table table-hover table-sm">
      
      
        <tr style="vertical-align:top;">
           <th width="200">
          
           <center><font size="5"><b>PRODUCTO</b></font>
            
        </th>

          <th width="200"><center><font size="5"><b>DESCRIPCION</b></font></th>
            <th width="100"></th>
       
        <th colspan="5"><center><font size="5"><b>PRECIO</b></font></center></th>
          <th width="100"></th>

           <th colspan="5"><center><font size="5"><b>STOCK</b></font></center></th>
          <th width="100"></th>
        <th colspan="2"><center><font size="5"><b>MODIFICAR INFORMACION</b></font></center></th>
        </tr>
        <tbody>
          <?php
          include 'php/conexion.php';
          $query="SELECT * FROM almacen";
          $resultado = $cnx->query($query);
          while ($row= $resultado->fetch_assoc()) {
          
          ?>
          <tr>
          <td style="vertical-align:top;">
          
              <img width="200" height="200" src="data:image/jpg;base64,<?php  echo base64_encode($row['imagen']); ?>">
            
        </td>
         
            <td>
              <p><center><font size="5"><b><?php echo $row['descripcion'] ?></b></font></p>
            
            </td>
            <td width="100">
              
            </td>
            
            <td  colspan="5" >
               <p><center><font size="5"><b><?php echo $row['precio'] ?></b></font></p>
            </td>
            <td width="100"></td>


            <td  colspan="5" >
               <p><center><font size="5"><b><?php echo $row['stock'] ?></b></font></p>
            </td>
            <td width="100"></td>
            <th>
              
               <button class="btn btn-yellow"><a href="modificar.php?id=<?php echo $row['id']; ?>"><font color="black" face="Arial"><i class="fas fa-edit pr-2" aria-hidden="true"></i>ACTUALIZAR</font></a></button>
            </th>
            <th>
              <button class="btn btn-danger" onclick="return Confirmdelete()"><a href="eliminar.php?id=<?php echo $row['id']; ?>"><font color="white" face="Arial"><i class="fas fa-trash-alt"></i>ELIMINAR</font></a></button>
            </th>
          </tr>
          <?php
            } 
          ?>
        </tbody>
      </thead>
    </table>
    <div class="col-md-4">
<a class="btn btn-primary" href="pdf_reporte.php"><i class="fa fa-download"></i> Descargar PDF</a>
</div>
  </center>
</div>
</div>
    </body>
</html>