<html>
<head>
	<title>Alta Celular</title>

	  
		<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
		<!--final de Estilos-->
		   <meta name="viewport" content="width=device-width, initial-scale=1">
          <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	  <div class="container">
	  	  <div class="page-header">
            </div>
<div class="CajaInicio animated bounceInRight">
		<h1>Alta Celular </h1>
	
		<form id="FormIngreso" method="post">
					<select name="marca"> 
					<option value="android">android</option>
					<option value="ios">ios</option>
					<option value="windows">windows</option>
				</select>	

					<input type="text" name="marca" placeholder="ingrese marca"/>
					<input type="text" name="modelo" placeholder="ingrese modelo"/>
					<input type="text" name="fechaFabricacion" placeholder="ingrese fecha fabricacion"/>
				
				<input type="submit" class="btn btn-danger" name="guardar">
				</div>
				
		</form>
		 <a class="btn btn-info" href="index.html">Menu principal</a>
<?php 

if(isset($_POST['guardar']))
{
	echo "se guarda";
// include y required
// con required si no esta el archivo php, da error	

	require("clases\celular.php");
	require("clases\AccesoDatos.php");

	// aca va el codigo del alta

	// creo un objeto cd
	$miceluar=new Celular();

	// asigno las propiedades desde los valores del form
	$miceluar->marca = $_POST['marca'];
	$miceluar->modelo= $_POST['modelo'];
	$miceluar->fechaFabricacion = $_POST['fechaFabricacion'];
	$miceluar->so= $_POST['so'];

	echo "ultimo id: # ".$miceluar->InsertarElcelular();
	

}
else
{

echo "Primer ingreso";
}
	


?>
	</div>
		</div>
</body>
</html>