<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- AlertDialog -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
<h4>Login</h4>
    <form action="index1.php" method="post">
        <label for="fEmail">Email:</label><br>
        <input type="text" id="fEmail" name="fEmail"><br>
        <label for="fPassword">Password:</label><br>
        <input type="password" id="fPassword" name="fPassword"><br><br>
        <input type="submit" value="Entar">
    </form>

    <script>
        function faltaEmail(){
            Swal.fire({
                icon: 'error',
                title: "Email",
                text: 'Por favor introduza uma email válido.',
            })
        }

        function faltaPassword(){
            Swal.fire({
                icon: 'error',
                title: "Password",
                text: 'Por favor introduza uma password válida.',
            })
        }

        function dadosInternosErrados(){
            Swal.fire({
                icon: 'error',
                title: 'Dados de acesso errados!',
                text: 'Por favor introduza email e passord válidos!',
                footer: '<a href="">Recuperar passord.</a>'
            })
        }

    </script>

</body>
</html>

<?php
    if (isset($_SESSION["login"])){
        if ($_SESSION["login"] == "1"){
            echo '<script type="text/JavaScript">dadosInternosErrados();</script>';
            //echo '<script type="text/JavaScript">console.log("aaa1")</script>';
        }
        else if ($_SESSION["login"] == "2"){
            echo '<script type="text/JavaScript">dadosInternosErrados();</script>';
            //echo '<script type="text/JavaScript">console.log("aaa2")</script>';
        }
        else if ($_SESSION["login"] == "4"){
            echo '<script type="text/JavaScript">dadosInternosErrados();</script>';
            //echo '<script type="text/JavaScript">console.log("aaa4")</script>';
        }
        else if ($_SESSION["login"] == "5"){
            echo '<script type="text/JavaScript">faltaEmail();</script>';
            //echo '<script type="text/JavaScript">console.log("aaa5")</script>';
        }
        else if ($_SESSION["login"] == "6"){
            echo '<script type="text/JavaScript">faltaPassword();</script>';
            //echo '<script type="text/JavaScript">console.log("aaa6")</script>';
        }
    }

    // remove all session variables
    session_unset();

    // destroy the session
    session_destroy();
?>
