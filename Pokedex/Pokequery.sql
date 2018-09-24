Create Database Pokedatos;
Use Pokedatos;
Create Table Tipo(
Id Tinyint PRIMARY KEY,
Descripcion Varchar (20),
Imagen Varchar(150));

Create Table Genero(
Id Tinyint PRIMARY KEY,
Descripcion Varchar (20),
Imagen Varchar(150));

Create Table Pokemon(
Id Tinyint PRIMARY KEY,
Descripcion Varchar (20),
Ataque Varchar (150),
Imagen Varchar(150),
Id_Genero Tinyint,
FOREIGN KEY (Id_Genero) references Genero (Id));

Create Table Poke_Tipo (
Id_Tipo Tinyint,
Id_Pokemon Tinyint,
FOREIGN KEY (Id_Tipo ) references Tipo (Id),
FOREIGN KEY (Id_Pokemon) references Pokemon (Id));

Insert Into Tipo (Id, Descripcion, Imagen)
Values 
(1,"Fire","https://pokeguide.neocities.org/Pic/fireicon.png"),
(2,"Water","https://pokeguide.neocities.org/Pic/watericon.png"),
(3,"Grass","https://pokeguide.neocities.org/Pic/grassicon.png");

Insert into Genero (Id, Descripcion, Imagen)
Values 	
(1,"Male","https://png.icons8.com/color/260/male.png"),
(2,"Female","https://png.icons8.com/color/260/female.png");


Insert Into Pokemon (Id, Descripcion, Ataque, Imagen, Id_Genero)
Values  
(1,"Charmander","Blaze", "https://cdn.bulbagarden.net/upload/thumb/7/73/004Charmander.png/250px-004Charmander.png",1),
(2,"Bulbasaur","Overgrow","https://cdn.bulbagarden.net/upload/thumb/2/21/001Bulbasaur.png/250px-001Bulbasaur.png",2),
(3,"Squirtle","Torrent","https://cdn.bulbagarden.net/upload/thumb/3/39/007Squirtle.png/250px-007Squirtle.png",1);

Insert Into Poke_Tipo(Id_Tipo, Id_Pokemon)
Values(1,1),(2,2),(3,3);
