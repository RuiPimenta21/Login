<?php
session_start();
if (!isset($_SESSION["nome"])){
    header("Location: ./index.php");
}

if (!empty($_POST['fname'])) {
    $_SESSION['nome'] = $_POST['fname'];
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


    <form action="./index2.php"  method='post'>
        <label for="fname">Novo nome:</label><br>
        <input type="text" id="fname" name="fname"><br><br>
        <input type="submit" value="Gravar">
    </form> 

    <a href="./index3.php" class="button">Pagina 3</a>
    <br>
    <a href="./index4.php" class="button">Encerrar sessão!</a>

</body>
</html>