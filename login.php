<?php
ob_start() ;
?>
<?php include'bootstrap.php'; ?>


<?php

# Se creao una sesión

# Se manda llamar el archivo de conexión
require_once 'php/conexion.php';

# Se verifica si se presiona el botón llamado iniciar-sesion
if (isset($_POST['inicia']))
{
  # Se guarda el contendio de las cajas de texto en las variables $us y $ps
  $us=$_POST['usuario'];
  $ps=$_POST['password'];
  
  # Se valida que las variables no esten vacias o nulas
  if (!empty($us) &&  !empty($ps))
  {
    # Query de consulta
    $query = "SELECT * from admin WHERE usuario='".$us."' AND password='".$ps."'";

    # Asigna el registro del Query
    $registro=mysqli_query($cnx,$query);

    # Asigna los datos del registro a la variable $campo
    $campo=mysqli_fetch_array($registro);

    # Cuenta la cantidad de registros del Query
    $count=mysqli_num_rows($registro);

    # Valida que la variable count tenga un valor
    if($count)  
    { 
      if ($campo['usuario']=="admin" AND $campo['password'] == $ps)
      {
        $_SESSION['nombre'] = $campo['nombre'];
        header("location:inventario.php"); 
      }
      else
      {
        $_SESSION['nombre'] = $campo['nombre'];
        $_SESSION['usuario'] = $campo['usuario'];
        header("location:inventario.php"); 
      } 
    } 
    else
    {
      echo "<div class='alert alert-danger'>
      <strong><h4>Ha surgido un Error<br>Verifica las credenciales de Acceso!</strong></div>";
    }
    
  }
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>INICIO DE SESIÓN</title>
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
	<link rel="icon" type="image/png" href="logo.jpg" />
</head>
<body>
   <nav class="navbar navbar-expand navbar-dark bg-dark">
    
    
        <img src="logo.jpg" class="md:mt-px xl:mt-2 width-geolocalizacion-logo" width="100" height="100" /></a>
      <a class="navbar-brand" href=""></a>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item">
        <a class="nav-link" href=""> <span class="sr-only">(current)</span></a>
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
        <a class="nav-link" href=""><span class="sr-only">(current)</span></a>
      </li>

      <section>
      <div class="modal fade-" id="modalLoginForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold ">NUEVO USUARIO</h4>
          <!-- Form -->
          <form id="formajax" name="formajax"  class="md-form" method="POST" style="color: #757575;">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <!-- nombre -->
            <div class="md-form input-with-post-icon">
              <i class="fas fa-user-circle input-prefix"></i>
              <input type="text" id="usuario" class="form-control" name="usuario" autofocus >
              <label for="USUARIO">Nombre De Usuario</label>
            </div>  
            <!-- Password -->
            <div class="md-form input-with-post-icon">
              <i class="fas fa-unlock input-prefix"></i>
              <input type="password" id="password" class="form-control" name="password" >
              <label for="password">Contraseña</label>
            

      </div>
      <div class="modal-footer d-flex justify-content-center">
       
          <button class="btn btn-default" name="enviar" id="enviar" type="button">Registrar</button>
          
      </div>
    </div>
  </div>
</div>

<div class="text-center">
  <a href="" class="btn btn-default btn-rounded mb-4" data-toggle="modal" data-target="#modalLoginForm"><i class="fas fa-portrait"></i>CREAR CUENTA</a>
</div>


    </section>

  </div>

</div>
<!-- Card -->

     </form>
             <br>
            
          </form>
  
</div></div></div></div></section>
      </ul>
       
      </div>
    </nav>
<br>
<center><h1>BOMBEO Y CONTROL HIDRÁULICO</h1></center>

<div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5">
          <div class="card-body">
              
            <h5 class="card-title text-center">INICIO DE SESION ADMINISTRADOR</h5>
            <br>
            
            <form class="form-signin"  method="post" autocomplete="off">
                
              <div class="form-label-group">
                  <label for="inputEmail">usuario</label>
                <input name="usuario" id="usuario" class="form-control" placeholder="INGRESAR USUARIO" required autofocus>
              </div>
              
                <br>
              <div class="form-label-group"> 
              <label for="inputPassword">Contraseña</label>
                <input name="password" type="password" id="password" class="form-control" placeholder="INGRESAR CONTRASEÑA" required>
               
              </div>
              <br>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="form1Example3" checked/>
                <label class="form-check-label" for="form1Example3"> Recordar</label>
              </div>
                <br><br>
              
              <button name="inicia" class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">INGRESAR</button>
              

            <br>
            <label style="background: #5C5EF1" class="form-check-label" type="submit" for="form1Example3"> Recuperar contraseña</label>
            
              <hr class="my-4">
             
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

<script type="text/javascript">
  $(document).ready(function(){
    $('#enviar').click(function(){
      var datos = $('#formajax').serialize();

      if ($('#usuario').val() == '') {
        swal ("¡Debe de Ingresar Un nombre de usuario ! " , "" , "warning");
        return;
      }
      if ($('#password').val() == '') {
        swal ("¡Debe de Ingresar Su clave de acceso! " , "" , "warning");
        return;
      }
     

      $.ajax({
        type:"POST",
        url:"registro.php",
        data:datos,
        success:function(r){
          if (r==1)
          {
           swal ("¡Registro enviado! " , "¡Los datos fueron registrados!" , "success");
            
            $('#usuario').val('');
            $('#password').val('');
            
          }
          else 
          {
            alert("Error");
          }

        }

      });
      return false;

    });
  });
</script>



</body>
</html>