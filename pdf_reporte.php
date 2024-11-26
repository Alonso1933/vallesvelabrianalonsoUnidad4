<?php ob_start(); ?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>

<center><h3>BOMBEO Y CONTROL HIDRAULICO S.A. DE .C. V</h3></center>
<center><h3>SUCURSAL SALTILLO</h3></center>
<table border="1" class="table table-striped table-hover">
      <thead>
      
        <tr>
           <th width="25"><center><font size="5"><b>PRODUCTO</b></font></th>

          <th width="15"><center><font size="5"><b>DESCRIPCIÓN</b></font></th>

          <th width="25"><center><font size="5"><b>PRECIO</b></font></th>

          <th width="25"><center><font size="4"><b>STOCK</b></font></th>  
        </tr>
        <tbody>
          <?php
          include 'php/conexion.php';
          $query="SELECT * FROM almacen";
          $resultado = $cnx->query($query);
          while ($row= $resultado->fetch_assoc()) {
          
          ?>
          <tr>
           <td><img width="100" height="100" src="data:image/jpg;base64,<?php  echo base64_encode($row['imagen']); ?>">
        </td>  
          <td>
          
              <p><center><font size="5"><b><?php echo $row['descripcion'] ?></b></font></p>
            
        </td>
            <td>
              <p><center><font size="5"><b><?php echo $row['precio'] ?></b></font></p>
            
            </td>
            <td>
              <p><center><font size="4"><b><?php echo $row['stock'] ?></b></font></p>
            
            </td>
          </tr>
          <?php
            } 
          ?>
        </tbody>
      </thead>
    </table>
    </body>
</html>
 <?php
require_once 'dompdf1/dompdf/autoload.inc.php';
use Dompdf\Dompdf;
$dompdf = new DOMPDF();
$dompdf->load_html(ob_get_clean());
$dompdf->render();
$pdf = $dompdf->output();
$filename = "reporte.pdf";
file_put_contents($filename, $pdf);
$dompdf->stream($filename);
?>