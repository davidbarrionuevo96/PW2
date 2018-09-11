<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/style.css">
	<title>Pokedex</title>
</head>
<body>
<main class="main">
<?php

$pokemons=Array("Charmander"=>array('ataque'=>'Blaze',
				'genero' => "<img class='genero' src='https://png.icons8.com/color/260/male.png'>",
				'imagen' => "<img class='imagenes' src='https://cdn.bulbagarden.net/upload/thumb/7/73/004Charmander.png/250px-004Charmander.png'>",
				'tipoimg' => "<img class='imagtipo' src='https://pokeguide.neocities.org/Pic/fireicon.png'>"),

				"Bulbasaur"=>array('genero'=>'Female','ataque'=>'Overgrow',
				'genero' => "<img class='genero' src='https://png.icons8.com/color/260/female.png'>",
				'imagen' => "<img class='imagenes' src='https://cdn.bulbagarden.net/upload/thumb/2/21/001Bulbasaur.png/250px-001Bulbasaur.png'>",
				'tipoimg' => "<img class='imagtipo' src='https://pokeguide.neocities.org/Pic/grassicon.png'>"),

				"Squirtle"=>array('ataque'=>'Torrent',
				'imagen' => "<img class='imagenes' src='https://cdn.bulbagarden.net/upload/thumb/3/39/007Squirtle.png/250px-007Squirtle.png'>",
				'genero' => "<img class='genero' src='https://png.icons8.com/color/260/male.png'>",
				'tipoimg' => "<img class='imagtipo' src='https://pokeguide.neocities.org/Pic/watericon.png'>"));

				if (isset($_POST["whoisthat"])) 
				{
					$buscado= $_POST["whoisthat"];
					$buscado= strtolower($buscado);
					$buscado= ucfirst($buscado);
					$c=0;
					foreach ($pokemons as $nombrecampo1=>$contenido1)  {
					if ($nombrecampo1==$buscado)
						{
						  echo 
						  "<h2>".$buscado."</h2>".

								  "<div>".$pokemons[$buscado]["imagen"]."</div>".
							  

								  "<div class='texto-contendor'>".$pokemons[$buscado]["tipoimg"]."</div>".
				
							
								  "<div class='texto-contendor '>".$pokemons[$buscado]["genero"]."</div>".
				
							
								  "<div class='texto-contendor attack'>".$pokemons[$buscado]["ataque"]."</div>";		
							  $c++;
							
						  }
						  }
					  if ($c==0) 
					  {
						  all ($pokemons);
					  }
				} 
				
				
				
				Function all ($pokemons){
					foreach ($pokemons as $nombrecampo2 => $contenido2) 
							  {	
								
								echo
								"<div class='contenedor'>".
								"<h2>".$nombrecampo2."</h2>".
								"<div class=''>".$contenido2["imagen"]."</div>".
								  "</div>";
							}}
				?>
<form method="post" action="pokedex.php" >

<input class="enviar" type="text" name="whoisthat">
<button class="enviar" type="submit">Consulta</button>
</main>
</form>
</body>
</html>