<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión Ventas</title>

    <?php include ("buscar.php");?>

    
    <style>
        header {text-align:center; color:yellow;}
        main {text-align:center;}
        input[type=submit] {color:yellow;
        background-color:rgb(60, 75, 207);
        padding:5px 20px;}
        button {color:yellow;
        background-color:rgb(60, 75, 207);
        padding:5px 20px;}
        table, th, td {border: 2px solid black;
        margin-left:auto;
        margin-right:auto;
        font-family:Arial;
        color: yellow;
        background-color:rgb(20, 50, 190);}
        input[type=text] {color:yellow;
        background-color:rgb(60, 75, 207);}
        select {color:yellow;
        background-color:rgb(60, 75, 207);}

        body {background-color:rgb(60, 63, 133);}

        hr {background-color: yellow; height:2px}
        label {color:yellow;}
        h4 {color:red; text-align:center;}

    </style>

</head>
<body>

    <header><h1 style="font-family:Arial, Helvetica, sans-serif">Gestión de Ventas.</h1></header>
    <h4 style="font-family:Arial, Helvetica, sans-serif">Advertencia: Cualquier dato modificado sin autorización será sancionado.</h4>

<nav>
<a href="gestorbienvenida_e.php"><button type="button" style="float: middle;">Volver al Inicio</button></a>

</nav>

<hr>
<main>
    <form action="" method="POST">
    <table border="1">
    <label for="ID">Ingrese un ID: </label>
    <input type="text" name="ID" id="ID" size="7" value="<?php echo $var1?>"><br><br>
    <input type="submit" name="buscar" value="Buscar"><br><br><br>


<tr>
            <td><label for="idprod">ID Producto</label></td>
            <td><input type="text" name="idprod" id="idprod" value="<?php echo $var2?>"></td>
</tr>

<tr>
            <td><label for="rc">RUT Cliente</label></td>
            <td><input type="text" name="rc" id="rc" value="<?php echo $var3?>"></td>
</tr>

<tr>
            <td><label for="tp">Pago Total</label></td>
            <td><input type="text" name="tp" id="tp" value="<?php echo $var4?>"></td>
</tr>

<tr>
            <td><label for="cprod">Cantidad de Producto(s)</label></td>
            <td><input type="text" name="cprod" id="cprod" value="<?php echo $var5?>"></td>
</tr>

<tr>
            <td><label for="remp">RUT Empleado</label></td>
            <td><input type="text" name="remp" id="remp" value="<?php echo $var6?>"></td>
</tr>

<tr>
            <td><label for="tat">Tipo Atención</label></td>
            <td><input type="text" name="tat" id="tat" value="<?php echo $var7?>"></td>
</tr>

    </table>

    <br><br>    
    <input type="submit" name="eliminar" disabled value="Eliminar">
    <input type="submit" name="modificar" disabled value="Modificar">
    <input type="submit" name="registro" value="Registrar">
    <a href="venyreg_e.php"><button type="button" style="float: middle;">Refrescar</button></a>
    <a href="visorproductos.php" target="_blank"><button type="button"  style="float: middle;">Lista Productos</button></a>
    <hr>
    <input type="submit" name="visualizar" value="Visualizar Todos">
</form>



<?php 
include ("visualizartodo.php");

include ("agregar.php");

include ("editar.php");

include ("eliminar.php");
?>





</main>
</body>
</html>