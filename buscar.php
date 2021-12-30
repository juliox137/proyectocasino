<?php 
    error_reporting(0);
    if ($_POST['buscar'] == "Buscar") {
    include ("funciones.php");
    $cnn = Conectar();
    $id = $_POST['ID'];
    $rs = mysqli_query($cnn,"select * from detalle where ID='$id'");
        if($row = mysqli_fetch_array($rs)){
            $var1 = $row[0];
            $var2 = $row[1];
            $var3 = $row[2];
            $var4 = $row[3];
            $var5 = $row[4];
            $var6 = $row[5];
            $var7 = $row[6];
        }else{
            echo "<script>alert('Este ID no está registrado.')</script>";
        }


}

?>