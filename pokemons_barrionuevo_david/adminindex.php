<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/style.css">
	<title>Pokedex</title>
</head>
<body>
<main class="main">

<?php

		$conn = mysqli_connect("localhost","root","","pokemons_barrionuevo_david");
		
		$c=0;
		if (isset($_POST["whoisthat"])) 
		{
			$buscado= $_POST["whoisthat"];
			$buscado= strtolower($buscado);
			$buscado= ucfirst($buscado);
			$c=0;

			$sql = 'select * from Pokemon';
			$result=mysqli_query($conn, $sql);


			while($asd=mysqli_fetch_assoc($result)){

				if ($asd["nombre"] == $buscado) 
				{
					$sql = "select id,nombre , ataque Ataque, imagen Imagen,tipo Imgtipo,sexo Imggenero
							from Pokemon
							Where nombre='$buscado'";
					$result=mysqli_query($conn, $sql);

					$rows=mysqli_fetch_assoc($result);
					
					

					echo 
					"<h2>".$rows['nombre']."<a class='editarbtn' href='editar.php?id=". $rows['id'] ."'> editar</a><br>"."</h2>".

					"<div class='texto-contendor '>"."<img class='imagenes' src=".$rows['Imagen'].">"."</div>".

					"<div class='texto-contendor '>"."<img class='imagtipo' src=".$rows['Imgtipo'].">"."</div>".

					"<div class='texto-contendor '>"."<img class='genero' src=".$rows['Imggenero'].">"."</div>".
					

					"<div class='texto-contendor attack'>".$rows['Ataque']."</div>";
					

					$c++;
				}} 
				
				if ($c==0) 
				{
					$sql = 'select * from Pokemon';

					$result=mysqli_query($conn, $sql);

					

					while($rows=mysqli_fetch_assoc($result))
					{

						$imagen=$rows['imagen'];

						echo
						"<div class='contenedor'>".
						"<h2>".$rows['nombre']."</h2>".
						"<div class=''>"."<img class='imagenes' src=".$imagen.">"."</div>".
						"</div>";
					}	
					$c++;	  		
				}
				
			}
			?>
<form method="post" action="adminindex.php" >
<input class="enviar inputmain" type="text" name="whoisthat">
<button class="enviar" type="submit">Consulta</button>
<a href='nuevo.php' class="enviar2">Nuevo</a>
</main>
</form>
</body>
</html>