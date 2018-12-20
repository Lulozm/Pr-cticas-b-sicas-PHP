<!DOCTYPE html>
<html lang="en">
<head>
  <title>Administrador de APP</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
   <link href="public_html/css/bootstrap.min.css" rel="stylesheet" media="screen">
	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Banco</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Inicio</a></li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Cliente <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="../index.php?inicio=3">Asignar</a></li>
          <li><a href="#">Borrar</a></li>
          <li><a href="#">Actualizar</a></li>
        </ul>
      </li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Registro <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#">Insertar</a></li>
          <li><a href="#">Borrar</a></li>
          <li><a href="#">Actualizar</a></li>
        </ul>
      </li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Reportes <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#">Clientes</a></li>
          <li><a href="#">Cuentas</a></li>
          <li><a href='/index.php?inicio=5'>Registro</a></li>
        </ul>
      </li>
    </ul>
	  <ul class="nav navbar-nav navbar-right">
      <li><a href="#"><span class="glyphicon glyphicon-user"></span><?php session_start(); echo $_SESSION['email']?></a></li>
      <li><a href='../index.php?inicio=4'><span class="glyphicon glyphicon-log-in"></span>Log-out</a></li>
    </ul>
  </div>
</nav>
  
<div class="container">
 <h1> LISTA DE  USUARIOS vvvv </h1>
    
    <div class="mbr-section__container container mbr-section__container--std-top-padding" style="padding-top: 93px;">
 <table border="1">
    <tr>
           <th>ID</th>
           <th>EMAIL</th>
           <th>CONTRASENA</th>
         
    </tr>
        <!--LISTA-->
          <tr>
             <td>{IDR}</td>
             <td>{EMAIL}</td>
             <td>{CONTRASENA}</td>
             
             
           </tr> 
        <!--LISTA-->
     </table>     



    </div>
</div>


</body>
</html>