<?php 

 function Conectar() //Se llama a la función que hicimos en el archivo PHP principal.
 {
    if (!($cnn = mysqli_connect("localhost", "root", ""))) //Se conecta al servidor (localhost) como un usuario raíz(root). y una password(Opcional.)
        {//Recordar que el signo de exclamación significa CONTRARIO.
        //Si no se conecta a localhost, salir.
        exit();
        }
    if(! mysqli_select_db($cnn, "GESTIONCASINO"))
        {  //Si no se conecta a la base de datos "PERSONAS", salir.
         exit();
        }
    return $cnn;
 }

?>