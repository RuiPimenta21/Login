<?php
    session_start();
    if (!isset($_SESSION["nome"])){
        header("Location: ./index.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
        echo "Olá " . $_SESSION["nome"] . ".<br>";
    ?>

    <a href="./index2.php" class="button">Pagina 2</a>
    <br>
    <a href="./index4.php" class="button">Encerrar sessão!</a>

</body>
</html>