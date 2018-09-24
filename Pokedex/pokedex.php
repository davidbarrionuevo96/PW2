<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/style.css">
	<title>Pokedex</title>
</head>
<body>
<main class="main">
<?php

		$conn = mysqli_connect("localhost","root","","Pokedatos");
		
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

				if ($asd["Descripcion"] == $buscado) 
				{

					$sql = "select Pok.Descripcion Pokemon, Pok.Ataque, Pok.Imagen,G.Descripcion Genero,T.Descripcion Tipo,T.Imagen Imgtipo, G.Imagen Imggenero  
					from Pokemon Pok join Genero G on G.id=Pok.Id_Genero 
					Join Tipo T on T.Id=PT.Id_Tipo
					Join Poke_Tipo PT on PT.Id_Pokemon=Pok.Id
					Where Pok.Descripcion='".$buscado."'";

					$result=mysqli_query($conn, $sql);

					$rows=mysqli_fetch_assoc($result);
						
					echo 
					"<h2>".$rows['Pokemon']."</h2>".

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

						$imagen=$rows['Imagen'];

						echo
						"<div class='contenedor'>".
						"<h2'>".$rows['Descripcion']."</h2>".
						"<div class=''>"."<img class='imagenes' src=".$imagen.">"."</div>".
						"</div>";
					}	
					$c++;	  		
				}
				
			}

			?>
<!-- <form method="post" action="pokedex.php" >

<input class="enviar" type="text" name="whoisthat">
<button class="enviar" type="submit">Consulta</button> -->

<form method="POST" action="pokedex.php" >
				<input class="enviar" type="text" name="whoisthat" autofocus>
			</form>
</main>
</form>
</body>
</html>