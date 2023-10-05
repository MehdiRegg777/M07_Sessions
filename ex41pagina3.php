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
        session_start();
        function formulari(){
            echo "<form method='POST'>";
            echo "<input type='number' name='endevina'>";
            echo "<input type='submit' value='ENDEVINA'>";
            echo "</form>";
        }
        if (!isset($_POST["endevina"])){
            formulari();
        } else {
            if ($_POST['endevina']===$_SESSION['ocult']){
                echo "<h3>Felicitats</h3>";
                echo "<a href='ex41pagina1.php'>Tornar a l'inici</a>";
            } elseif ($_POST['endevina']>$_SESSION['oculta']) {
                echo "<h3>El lumero que estas buscant es menor</h3>";
                formulari();
            }
        }

    ?>






</body>
</html>