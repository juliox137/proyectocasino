<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todos los Registros</title>
    <style>

        header {text-align:center; color:yellow;}
        main {text-align:center;}

        .columnas {margin-left: auto;
                  margin-right:auto;}

        .filas {margin-left: auto;
                 margin-right:auto;}

                 
                main {text-align:center;}

                body {background-color:rgb(60, 63, 133);}

                input[type=date] {color:yellow;

                background-color:rgb(46, 4, 56);

                padding:5px 20px;}

                label {color:yellow;}

                input[type=date] {color:yellow;

                background-color:rgb(60, 75, 207);
                padding:5px 20px;}

                input[type=submit] {color:yellow;

                background-color:rgb(60, 75, 207);
                padding:5px 20px;}

                button{color:yellow;

                background-color:rgb(60, 75, 207);

                padding:5px 20px;}

                table, th, td {border: 1px solid black;
                    margin-left:auto;
                    margin-right:auto;
                color: yellow;
                background-color:rgb(60, 75, 207);}

                
    </style>
</head>
<body>

<header>
    <h1 style="font-family:Arial, Helvetica, sans-serif">Consultar Todos</h1>

    <hr>

</header>

<nav>

<a href="/mantenedor2/lindex.html"><button>Menú principal</button></a>
<a href="agregar.php"><button type="button" style="float: middle;">Agregar</button></a>

</nav>

<main>
    <form action="" method="POST">

    <input type="submit" name="visualizar" value="Visualizar Todos">
    </form>

    <?php
    error_reporting(0);
    if ($_POST['visualizar'] == "Visualizar Todos") {

        include("funciones.php");
        $cnn = Conectar();
        $rs = mysqli_query($cnn, "SELECT * FROM DETALLE");

        echo "<table class='columnas'>";
           echo "<tr>";
                echo "<td>ID</td>";
                echo "<td>ID Producto</td>";
                echo "<td>RUT Cliente</td>";
                echo "<td>Pago Total</td>";
                echo "<td>Cantidad Producto(s)</td>";
                echo "<td>RUT Empleado</td>";
            echo "</tr>";

        while ($row = mysqli_fetch_array($rs)) 
        { echo "<tr class='filas'>";
          echo "<td> $row[0] </td>";
          echo "<td> $row[1] </td>";
          echo "<td> $row[2] </td>";
          echo "<td> $row[3] </td>";
          echo "<td> $row[4] </td>";
          echo "<td> $row[5] </td>";
          echo "</tr>"; 
        
        }

        echo "</table>";
    }
?>
</main>
</body>
</html>