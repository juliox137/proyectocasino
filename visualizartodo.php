<?php
    error_reporting(0);
    echo "<br><br>";
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
                echo "<td>Tipo Atención</td>";
            echo "</tr>";

        while ($row = mysqli_fetch_array($rs)) 
        { echo "<tr class='filas'>";
          echo "<td> $row[0] </td>";
          echo "<td> $row[1] </td>";
          echo "<td> $row[2] </td>";
          echo "<td> $row[3] </td>";
          echo "<td> $row[4] </td>";
          echo "<td> $row[5] </td>";
          echo "<td> $row[6] </td>";
          echo "</tr>"; 
        
        }

        echo "</table>";
    }
?>