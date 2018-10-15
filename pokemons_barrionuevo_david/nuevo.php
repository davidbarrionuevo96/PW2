<?php
    $conn = mysqli_connect('localhost','root','','pokemons_barrionuevo_david');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="recursos/css/style.css">
    <title>Nuevo</title>
</head>
<body>
<main>
        <section>
           <article>
           <form name="form" method="post">
                    <label class="labelform" for="id">Codigo:</label>
                    <input class="inputform" type="text" id="id" name="id" value="">

                    <label class="labelform" for="nombre">Nombre:</label>
                    <input class="inputform" type="text" id="nombre" name="nombre" value="">

                    <label class="labelform" for="ataque">Ataque:</label>
                    <input class="inputform" type="text" id="ataque" name="ataque" value="">

                    <label class="labelform" for="imagen">Imagen:</label>
                    <input class="inputform" type="text" id="imagen" name="imagen" value="">

                    <select class="selectform" name="tipo" id="tipo">
                        <option value="https://pokeguide.neocities.org/Pic/fireicon.png">Fire</option>
                        <option value="https://pokeguide.neocities.org/Pic/grassicon.png">Grass</option>
                        <option value="https://pokeguide.neocities.org/Pic/watericon.png">Water</option>
                    </select>
                    
                    <select class="selectform" name="sexo" id="sexo">
                    <option value="https://png.icons8.com/color/260/female.png">Female</option>
                    <option value="https://png.icons8.com/color/260/male.png">Male</option>
                    </select>

                    <input class="nvoboton" src="adminindex.php" name="cerrar" type="submit" value="Cerrar">
                    <input class="nvoboton" type="submit" name="enviar" value="Guardar">
                    <div class="clear"></div>
                    </div>
                </form>
           </article>
        </section>
    </main>
    <?php
        if(isset($_POST["enviar"])){

            $id=$_POST['id'];
            $nombre=$_POST['nombre'];
            $nombre=ucfirst($nombre);
            $imagen=$_POST['imagen'];
            $tipo=$_POST['tipo'];
            $sexo=$_POST['sexo'];
            $ataque=$_POST['ataque'];

            $sql1="select * from pokemon where id='$id'";
            
            $result=mysqli_query($conn,$sql1);
            $asd=mysqli_fetch_assoc($result);

            if(!($asd['id']==$id)){
                
                $sql2="insert Into Pokemon (id, nombre, ataque, imagen, tipo,sexo) values('$id','$nombre','$ataque','$imagen','$tipo','$sexo')";           
                
                $result=mysqli_query($conn,$sql2);

                echo "<p class='labelform editado'>Guardado Correctamente</p>";
                
            }
            else{
                echo "<p class='labelform editado'>Error de Codigo</p>";
            }
        }
        if(isset($_POST["cerrar"])){
            header('location:adminindex.php');
        }

    ?>
</body>
</html>
