<?php 
    
if($_POST['registro'] == "Registrar") 
        {

            include('funciones.php'); 
            $cnn = Conectar(); 

            $idprod = $_POST['idprod'];

            $rc = $_POST['rc'];

            $tp = $_POST['tp'];

            $cprod = $_POST['cprod'];
            
            $remp = $_POST['remp'];

            $tat = $_POST['tat'];

            $sql = "
            INSERT INTO DETALLE (ID_PRODUCTO,CLIENTE,TOTALPAGO,CANT_PRODUCTO, RUT_EMPLEADO, TIPOATENCION)
            VALUES ('$idprod', '$rc', '$tp', '$cprod', '$remp', '$tat');";

            mysqli_query($cnn, $sql);


            echo "<script>alert('Se han introducido los datos exitosamente.')</script>";


}
    
?>