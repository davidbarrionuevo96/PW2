<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <main>
        <section>
           <article>
               <form action="login.php" name="form" method="post" enctype="application/x-www-form-urlencoded">
                    <label class="labelform" for="login">Name(admin):</label>
                    <input class="inputform" type="text" id="login" name="login">

                    <label class="labelform" for="contrasena">Password(123):</label>
                    <input class="inputform" type="contrasena" id="contrasena" name="contrasena">

                    <input class="nvoboton" type="submit" name="enviar" value="Enviar">
                    </div>
                </form>
           </article>
        </section>
    </main>
    <?php


if(isset($_POST["enviar"])){
    $login=$_POST['login'];
    $contrasena=$_POST["contrasena"];

    if($login=="admin" && ($contrasena=="123")){

    $_SESSION["logeo"];
    
     header("location:adminindex.php");
     
    }
    else{
     echo "<p>Su Login o Contraseña son Incorrectos</p>";
     
    }
}
?>

</body>
</html>