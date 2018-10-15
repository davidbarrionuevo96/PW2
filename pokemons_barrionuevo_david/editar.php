<?php
    $conn = mysqli_connect('localhost','root','','pokemons_barrionuevo_david');
    $id=$_GET['id'];
    $sql="select * from Pokemon where id='$id'";
    $result=mysqli_query($conn,$sql);
    $rows=mysqli_fetch_assoc($result);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="recursos/css/style.css">
    <title>Editar</title>
</head>
<body>
<main>
        <section>
           <article>
               <form name="form" method="post">
                    <label  class="labelform" for="codigo">Codigo:</label>
                    <input type="text"  class="inputform" id="codigo" name="codigo" value="<?php echo $rows['id'];?>" disabled>

                    <label  class="labelform" for="nombre">Nombre:</label>
                    <input type="text"  class="inputform" id="nombre" name="nombre" value="<?php echo $rows['nombre'];?>">

                    <label class="labelform"  for="imagen">Imagen:</label>
                    <input type="text" class="inputform"  id="imagen" name="imagen" value="<?php echo $rows['imagen'];?>">

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
                </form>
           </article>
        </section>
    </main>
    <?php
        if(isset($_POST["enviar"])){
            $nombre=$_POST['nombre'];
            $nombre=ucfirst($nombre);
            $imagen=$_POST['imagen'];
            $tipo=$_POST['tipo'];
            $sexo=$_POST['sexo'];
            $sql2="update Pokemon set nombre='$nombre',imagen='$imagen',tipo='$tipo',sexo='$sexo' where id='$id'";
            $result=mysqli_query($conn,$sql2);
            echo "<p class='labelform editado'>Editado Correctamente</p>";
        }
        if(isset($_POST["cerrar"])){
            header('location:adminindex.php');
        }
    ?>
</body>
</html>
