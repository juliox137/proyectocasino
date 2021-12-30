<?php
    error_reporting(0);
    echo "<br><br>";
    if ($_POST['vlist'] == "Ver Listado") {

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
    }
?>