<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Gestion de Productos.</title>
        
    </head>
    <style>

header {text-align:center;
        color:yellow;}

nav {text-align:center;}

body {background-color:rgb(60, 63, 133);}

input[type=button] {color:yellow;

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
input[type=text] {color:yellow;
        background-color:rgb(60, 75, 207);}

        label {color:yellow;}

        select {color:yellow;
        background-color:rgb(60, 75, 207);}

button {color:yellow;
background-color:rgb(60, 75, 207);
padding:5px 20px;}



</style>
<body bgcolor="#98BDFF">
    <center>
    
    <form action="" method="post">
        <header>
        <h2><u>Gestor de Productos.</u></h2>
        </header>
        <br><br><br>
<label for="Producto">Producto: </label>
        <tr>
            <td></td>
            
                
                <td><select name="Producto" name="Producto" size="1">
                <option value="Completo Italiano"selected>Completo Italiano</option>
                <option value="As Queso">As Queso</option>
                <option value="Chacarero">Chacarero</option>
                <option value="As Dinamico">As Dinamico</option>
                <option value="Completo Incompleto">Completo Incompleto 
                <option value="Coca-Cola 250cc">Coca-Cola 250cc</option>
                <option value="Sprite 250cc">Sprite 250cc</option>
                <option value="Nectar Andina 250cc">Nectar Andina 250cc</option>
                </option>
            </td>
            </select>
        </tr>
        <br><br><br>
        <label for="Precio">Precio: </label>
        <input type="text" name="Precio" value="">
        <br><br><br>
<label for="Stock">Stock: </label>
        <input type="text" name="Stock" value="">
        <br><br><br>
        <input type="button" value="Agregar/Eliminar">&nbsp&nbsp<input type="button" value="Editar">&nbsp&nbsp<input type="button" value="Aplicar Cambios">



    </form>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <hr>
            <a href="gestorbienvenida.php"><button type="button" style="float: middle;">Volver al Inicio</button></a>
    </body>
</html>