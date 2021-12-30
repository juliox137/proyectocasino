<?php 
    
if($_POST['modificar'] == "Modificar") 
        {

            include('funciones.php'); 
            $cnn = Conectar(); 

            $id = $_POST['ID'];

            $idprod = $_POST['idprod'];

            $rc = $_POST['rc'];

            $tp = $_POST['tp'];

            $cprod = $_POST['cprod'];
            
            $remp = $_POST['remp'];

            $tat = $_POST['tat'];

            $sql = "
            UPDATE DETALLE 
            SET ID_PRODUCTO = '$idprod', CLIENTE = '$rc', TOTALPAGO = '$tp', CANT_PRODUCTO = '$cprod', RUT_EMPLEADO = '$remp', TIPOATENCION = '$tat'
            WHERE ID = '$id'";

            mysqli_query($cnn, $sql);


            echo "<script>alert('Se han modificado los datos exitosamente.')</script>";


}
    
?>