Create Database pokemons_barrionuevo_david;
Use pokemons_barrionuevo_david;

Create Table Pokemon(
id int PRIMARY KEY,
nombre Varchar (50),
ataque Varchar (50),
imagen Varchar(150),
tipo varchar(150),
sexo varchar(150)
);

Insert Into Pokemon (id, nombre, ataque, imagen, tipo,sexo)
Values  
(1,"Charmander","Blaze", "https://cdn.bulbagarden.net/upload/thumb/7/73/004Charmander.png/250px-004Charmander.png","https://pokeguide.neocities.org/Pic/fireicon.png","https://png.icons8.com/color/260/male.png"),
(2,"Bulbasaur","Overgrow","https://cdn.bulbagarden.net/upload/thumb/2/21/001Bulbasaur.png/250px-001Bulbasaur.png","https://pokeguide.neocities.org/Pic/grassicon.png","https://png.icons8.com/color/260/male.png"),
(3,"Squirtle","Torrent","https://cdn.bulbagarden.net/upload/thumb/3/39/007Squirtle.png/250px-007Squirtle.png","https://pokeguide.neocities.org/Pic/watericon.png","https://png.icons8.com/color/260/female.png");
