<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>màquina d'escriure</title>
    <style>
    .enlaceboton {    font-family: verdana, arial, sans-serif;
   font-size: 10pt;
   font-weight: bold;
   padding: 4px;
   background-color: #ffffcc;
   color: #666666;
   text-decoration: none;
    }
    .enlaceboton:link,
    .enlaceboton:visited {
    border-top: 1px solid #cccccc;
    border-bottom: 2px solid #666666;
    border-left: 1px solid #cccccc;
    border-right: 2px solid #666666;
    }
    .enlaceboton:hover {
        border-bottom: 1px solid #cccccc;
    border-top: 2px solid #666666;
    border-right: 1px solid #cccccc;
    border-left: 2px solid #666666;
    }
    </style>
</head>
<body>
    
<h1>Màquina D'escriure</h1>
<form action="" method="get">
<?php
    

   


    foreach (range("A", "Z") as $letra) {
        echo "<a href='?lletra=$letra' class='enlaceboton' role='button'>  $letra  </a> ";
    } echo "<a href='?lletra=&nbsp' class='enlaceboton' role='button'>  Espacio  </a> ";
    echo "<br><br><a href='?borrar=true' class='enlaceboton' role='button'>  Borrar  </a> ";


    if (!isset($_SESSION['historial']) || isset($_GET['borrar'])) {
        //Iniciar sesion
        $_SESSION['historial'] = "";
    } elseif (isset($_GET['lletra'])) {
        //Concatenar
        $_SESSION['historial'].=$_GET['lletra'];
    }
    echo "<p>".$_SESSION['historial']."</p>";



?>

</body>
</html>