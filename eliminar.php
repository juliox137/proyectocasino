<?php 
    
if($_POST['eliminar'] == "Eliminar") 
        {

            include('funciones.php'); 
            $cnn = Conectar(); 

            $id = $_POST['ID'];

            $sql = "DELETE FROM DETALLE WHERE ID = '$id';";

            mysqli_query($cnn, $sql);


            echo "<script>alert('Se han eliminado los datos exitosamente.')</script>";

        }



    
?>