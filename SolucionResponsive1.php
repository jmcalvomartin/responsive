<html>
    <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
    <body>
  <div class="container">
   <div class="row">
    <div class="col-md-6">
       
    <div class="jumbotron">
    <h1>Restaurantes</h1>      
    <p>Listado de Restaurantes de la empresa Booking</p>
    <div class="row">
    	<div class="col-md-4">
    	<button type="button" class="btn btn-success btn-block">Alojamientos</button>
    	</div>
    	<div class="col-md-4">
    	<button type="button" class="btn btn-success btn-block">Museos</button>
    	</div>
    	<div class="col-md-4">
    	<button type="button" class="btn btn-success btn-block">Rutas</button>
    	</div>
   </div> 	
        
      </div>
    </div>
    <div class="col-md-6">
      <div class="thumbnail">
       
          <img src="http://www.restaurantesencuenca.com/html/8985_RESTAURACIN_ALPI_S_L_/img/big_97316_119448_restaurante_cuenca.jpg" class="img-rounded" alt="Nature" style="width:100%">
        
      </div>
    </div>
  	    
    </div></div>


<!-- con este PHP me conecto a la Base de Datos y realizo la consulta -->
<?php
     include ('connect.php');
     $consulta= "select * from Restaurantes;";
     
     $listado = mysqli_query ($conectar,$consulta);
     
     
      ?>
      
 <!-- En HTML dibujo la cabecera de la Tabla, que siempre será fija -->     
    <div class="container">
    <table class="table" border="1">
    <tr class="alert alert-success">
      <th>Nombre</th>
      <th>Tipo</th>
      <th>Ciudad</th>
    </tr>
      
      
  <!-- En PHP y con un bucle WHILE voy sacando todos los datos de la tabla en relación a la consulta anterior -->      
      <?php
        
       while($reg=  mysqli_fetch_array($listado))
      
       {
        
         echo '<tr>';
         echo '<td>'.$reg['Nombre'].'</td>';
         echo '<td>'.$reg['Tipo'].'</td>';
         echo '<td>'.$reg['Ciudad'].'</td>';
         echo '</tr>';
        
       }
        
        ?>
      </table>  
</div>
</body>
</html>
