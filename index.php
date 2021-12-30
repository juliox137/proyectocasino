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

button {color:yellow;

background-color:rgb(60, 75, 207);

padding:5px 20px;}

a {color:cyan;}

p {color:white;}

img {display: block;
     margin-left: auto;
     margin-right: auto;
     width: 20%;}

 table, th, td {border: 2px solid black;
margin-left:auto;
margin-right:auto;
color: yellow;
background-color:rgb(20, 50, 100);}



</style>
    <body bgcolor="#98BDFF">
    
        <form action="" method="post">
            <br>
            <header>

            <center><h2><u>Bienvenido al Casino.</u></h2></center>
            </header>
            <center>
            <hr>
            <img src="https://www.casinoexpress.cl/img/galeriaCasino/galeria-casino/box/26.jpg" width=260 alt="casino.png">
            <table>

                <tr>
                    <h2><td>Nombre de Usuario:</td></h2>
                    <td><input type="text" value="" size="10" lengh="20"></td>   
                </tr>
                <tr>
                    <h2><td>Contraseña:</td></h2>
                    <td><input type="password" name="contr1" value="" size="10" maxlengh="20"></td>   
                </tr>
             

            </table>
            <p>Recordar este Usuario. <input type="Checkbox" name="" value=""></p>
            
            
            <p>¿No tienes Cuenta? <a href="register.php">&nbspRegistrarse</a><br></p>
            <a href="recoverypass.php">&nbsp¿Olvidaste tu Contraseña?</a>
            
            <br><br>
            <a href="gestorbienvenida.php"><button type="button" style="float: middle;">Administrador</button></a>    
            <a href="gestorbienvenida_e.php"><button type="button" style="float: middle;">Empleados</button></a><hr>
            <br>
            <header>
            <h3>Integrantes del Grupo 7.</h3></header>
            <br>
            <table border="1">
                <tr>
                    <td>N°</td>
                    <td>Nombre:</td>
                    <td>Apellidos:</td>
                </tr>
                <tr>
                    <td>1°</td>
                    <td>Christian</td>
                    <td>Charles</td>
                </tr>
                <tr>
                    <td>2°</td>
                    <td>Arturo </td>
                    <td>Carrillo</td>
                </tr>
                <tr>
                    <td>3°</td>
                    <td>Benjamín</td>
                    <td>Vargas</td>
                </tr>
                <tr>
                    <td>4°</td>
                    <td>Julio </td>
                    <td>Nahuelfil</td>
                </tr>
                <tr>
                    <td>5°</td>
                    <td>Leandro</td>
                    <td>Faunes</td>
                </tr>
                <tr>
                    <td>6°</td>
                    <td>Rodrigo</td>
                    <td>Yañez</td>
                </tr>
                <tr>

                    <td>Modulo:</td>
                    <td colspan="2">Taller Base de Datos</td>

                </tr>
                
                

            </center>
        </form>


        


    </body>
</html>