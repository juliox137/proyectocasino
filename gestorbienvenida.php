<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login de Usuario.</title>
        
    </head>
    <style>

header {text-align:center;
        color:yellow;}

nav {text-align:center;}

body {background-color:rgb(60, 63, 133);}

input[type=button] {color:yellow;

background-color:rgb(60, 75, 207);

padding:5px 20px;}

button {color:yellow;

background-color:rgb(60, 75, 207);

padding:5px 20px;}

img {display: block;
     margin-left: auto;
     margin-right: auto;
     width: 20%;}

 table, th, td {border: 2px solid black;
margin-left:auto;
margin-right:auto;
color: yellow;
background-color:rgb(20, 50, 100);}
.button {
padding: 50px 100px;
}
input[type=submit] {color:yellow;
        background-color:rgb(60, 75, 207);
        padding:5px 20px;}



</style>
    <body bgcolor="#98BDFF">
    
        <form action="" method="post">
        <?php error_reporting(0) ?>
            <br>
            <header>
                
            <input type="submit" name="asdf" style="float: right;" value="Ayuda(?)">
            <?php 

                if ($_POST['asdf'] == "Ayuda(?)") {

                echo "<script>alert('Solo el administrador puede editar los valores principales. Cualquier valor editado será denunciado, cualquier duda favor contactarse al siguiente e-mail: admin@casino.cl')</script>";
                } 

            ?>
           
           
            <br>
            

            <center><h2><u>Bienvenido al Gestor de Casino.</u></h2></center>
            <br><br><br>
            <a href="empleados.php"><button type="button" style="float: middle; width:200px ">Gestion de Empleados</button></a>
            <br><br><br>
            <a href="venyreg.php"><button type="button"  style="float: middle; width:200px">Ventas y Registros</button></a>
            <br><br><br>
            <a href="gestprodadmin.php"><button type="button" style="float: middle; width:200px">Gestion Productos</button></a>
            <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
            <hr>
            <a href="index.php"><button type="button" style="float: middle;">Cerrar Sesión</button></a>
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        </form>
    </body>
</html>