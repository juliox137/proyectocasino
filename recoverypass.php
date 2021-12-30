<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>¿Olvidaste tu Contraseña?</title>


    <style>
        header {text-align:center; color:yellow;}
        main {text-align:center;}
        .btnstop {text-align:center;}
        input[type=submit] {color:yellow;
        background-color:rgb(60, 75, 207);
        padding:5px 20px;}
        input[type=text] {color:yellow;
        background-color:rgb(60, 75, 207);}
        input[type=button] {color:yellow;
        background-color:rgb(60, 75, 207);}
        select {color:yellow;
        background-color:rgb(60, 75, 207);}

        body {background-color:rgb(60, 63, 133);}

        h1 {color:yellow; font-family:Arial;}
        b {color:yellow; font-family:Arial;}
        .volver {text-align:left;}
    </style>
</head>
<body>

    <header>
    <h1>¿Olvidaste tu contraseña?</h1>
    </header>

    <nav><a href="/gestioncasino/index.php"><input type="button" value="Volver al inicio"></a></nav>
    <hr>
    <main>
        <b>Ingrese su correo de recuperacion para recuperar la contraseña.</b><br> <br>
        
        <input type="text" name="txted" value="ejemplo124@gmail.com" size="20" maxlength="30"><br><br>

        <input type="submit" name="btnrecuperar" value="Recuperar contraseña">
    </main>
   
    
</body>
</html>