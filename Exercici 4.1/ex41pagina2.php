<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SESSIONS 2</title>
</head>
<body>
    <h1>NOMBRE ENREGISTRAT</h1>
    <?php

        $_SESSION["ocult"]=$_POST["ocult"];


    ?>
    
    <a href="ex41pagina3.php">Endevinar</a>
</body>
</html>