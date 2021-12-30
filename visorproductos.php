<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado Productos</title>

    <style>
        h1 {color:yellow; text-align:center;}
        table, th, td {border: 2px solid black;
        margin-left:auto;
        margin-right:auto;
        font-family:Arial;
        color: yellow;
        background-color:rgb(20, 50, 190);}
        body {background-color:rgb(60, 63, 133);}
        hr {background-color: yellow; height:2px}
    </style>
</head>
<body>
    <form action="" method="POST">

    <h1>Listado de Productos.</h1>
    <hr>
    <?php
    error_reporting(0);
    echo "<br><br>";

        include("funciones.php");
        $cnn = Conectar();
        $rs = mysqli_query($cnn, "SELECT * FROM PRODUCTO");

        echo "<table class='columnas'>";
           echo "<tr>";
                echo "<td>ID</td>";
                echo "<td>Descripción</td>";
                echo "<td>Precio</td>";
                echo "<td>Stock</td>";
            echo "</tr>";

        while ($row = mysqli_fetch_array($rs)) 
        { echo "<tr class='filas'>";
          echo "<td> $row[0] </td>";
          echo "<td> $row[1] </td>";
          echo "<td> $row[2] </td>";
          echo "<td> $row[3] </td>";
          echo "</tr>"; 
        
        }

        echo "</table>";
    
?>
</html>