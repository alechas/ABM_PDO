<html>
<head>
	<title>Ejemplos de PDO</title>

		<title>Ejemplos de PDO</title>

	  
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

       <script type="text/javascript">
	        function Borrar(id)
	        {
	        	alert(id);
	        	document.getElementById('idparaborrar').value=id;
	        	document.frmBorrar.submit();
	        }
        </script>
</head>
<body>

<?php
	if(isset($_POST['idparaborrar']))
	{
		echo "Debo borrar";
		include_once('clases/cd.php');
		include_once('clases/AccesoDatos.php');
		var_dump($_POST);
		$resultado = cd::BorrarCd($_POST['idparaborrar']);
	}

?>	
	<form name="frmBorrar" method="POST">
		<input type="text" name="idparaborrar" id="idparaborrar" hidden/>
	</form>

	  <div class="container">
	  	  <div class="page-header">
                <h1>Ejemplos de Grilla</h1>      
            </div>
		<div class="CajaInicio animated bounceInRight">
		<h1>Ejemplos PDO </h1>

		 <a class="btn btn-info" href="index.html">Menu principal</a>
<?php 
include_once("clases/cd.php");
include_once("clases/AccesoDatos.php");

// $datos= cd::TraerTodosLosCds();
// var_dump($datos);-->

$ArrayDeCds = cd::TraerTodosLosCds();
echo "<table class='table'><thead>
		<tr>
			<th>  BORRAR      </th>
			<th>  cantante    </th>
			<th>  año         </th>
			<th>  titulo      </th>
			</tr> </thead>";   	

	foreach ($ArrayDeCds as $cd){

//
		//					<td>$cd->id</td>
		echo " 	<tr>
					<td><button class='btn btn-danger' name='Borrar' onclick='Borrar($cd->id)'>Borrar</button></td>
					<td>$cd->cantante</td>
					<td>$cd->año</td>
					<td>$cd->titulo</td>
				</tr>";
	}	
	echo"</table>";		
?>
		</div>
	</div>
</body>
</html>