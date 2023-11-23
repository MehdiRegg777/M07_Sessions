<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SESSIONS 3</title>
</head>
<body>
    <h1>ENDEVINA EL NOMBRE</h1>
    
    

    <?php


        if (!isset($_SESSION["historial"])) {
            $_SESSION["historial"] = array(); // Inicializa el historial como un arreglo vacío si no existe
        }

        $numeroIntentos = 0;
        if (!isset($_SESSION["intentos"])) {
            $_SESSION["intentos"] = $numeroIntentos; // Inicializa el número de intentos si no existe
        }

        function formulari()
        {

            echo "<form method='POST'>";
            echo "<input type='number' name='endevina'>";
            echo "<input type='submit' value='ENDEVINA'>";
            echo "</form>";

            if (isset($_POST['endevina'])) {
                // Intentos:
                $numeroIntentos = $_SESSION["intentos"];
                ++$numeroIntentos;
                $_SESSION["intentos"] = $numeroIntentos;
                echo "Número intentos: $numeroIntentos<br>";

                // Agregar el número ingresado al historial
                
                $_SESSION["historial"][]  = $_POST['endevina'];;
            }

            echo "<h3>Historial:</h3>";
            echo "<p>";
            foreach ($_SESSION["historial"] as $numero) {
                // Imprime los números del historial separados por coma
                echo "$numero, ";
            }
            echo "</p>";
        }

        if (!isset($_POST["endevina"])) {
            formulari();
        } else {
            if ($_POST['endevina'] === $_SESSION['ocult']) {
                echo "<h3>Felicitats</h3>";
                echo "<a href='ex41pagina1.php'>Tornar a l'inici</a>";
                session_destroy();
            } elseif ($_POST['endevina'] > $_SESSION['ocult']) {
                echo "<h3>El número que estás buscando es menor</h3>";
                formulari();
            } elseif ($_POST['endevina'] < $_SESSION['ocult']) {
                echo "<h3>El número que estás buscando es mayor</h3>";
                formulari();
            }
            
        }
?>







</body>
</html>