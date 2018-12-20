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
          <li><a href="#">Asignar</a></li>
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
          <li><a href="#">Actualizar</a></li>
        </ul>
      </li>
    </ul>
	  <ul class="nav navbar-nav navbar-right">
      <li><a href="#"><span class="glyphicon glyphicon-user"></span><?php $_SESSION['email']?></a></li>
      <li><a href='index.php?inicio=4'><span class="glyphicon glyphicon-log-in"></span> Log-out</a></li>
    </ul>
  </div>
</nav>
  
<div class="container">
 
  <form class="form-horizontal" action="" method="post">
      <div class="form-group">
      
      <div class="col-sm-10">
        <input type="text" class="form-control" id="nombre" placeholder="Capture nombre" name="idc" value="{ID}">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Nombre:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="nombre" placeholder="Capture nombre" name="nombrec" required>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd" required>Ciudad:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="ciudad" placeholder="Capture ciudad" name="ciudadc">
      </div>
    </div>
      <div class="form-group">
      <label class="control-label col-sm-2" for="pwd" required>Calle:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="calle" placeholder="Capture calle" name="callec">
      </div>
    </div>
      
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <input type="submit" class="btn btn-default" value="actualizar" name="accion"/>
      </div>
    </div>
  </form>
</div>

</body>
</html>