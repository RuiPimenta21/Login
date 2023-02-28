
<?php
    define('DB_HOST'        , "FIXO\SQLEXPRESS");
    define('DB_USER'        , "admin");
    define('DB_PASSWORD'    , "admin");
    define('DB_NAME'        , "RoyalSchoolDB");
    define('DB_DRIVER'      , "sqlsrv");
?>


<?php
// Start the session
session_start();

$txtEmail = $_POST['fEmail'];
$txtPassword = $_POST['fPassword'];


if (empty($txtEmail)) {
    $_SESSION["login"] =  "5";
    header("Location: ./index.php");
    exit();
}
else if (empty($txtPassword)){
    $_SESSION["login"] =  "6";
    header("Location: ./index.php");
    exit();
}
else {
    
    require_once "./Conexao.php";
    try{
       $Conexao = Conexao::getConnection();
 
       $stringQuery="";
       $stringQuery = "exec loginIndex @email = '".$txtEmail."',  @password = '".$txtPassword."'";
       $query = $Conexao->query($stringQuery);
       $dados = $query->fetchAll();
 
       $linha=0;
       foreach($dados as $dado) {
          $dado[$linha];
          $linha++;
       }
       $myArr = $dado;
       $myJSON = json_encode($myArr);
       
 
    }catch(Exception $e){
       echo $e->getMessage();
       exit;
    }

    if ($myArr[0] == 1){
        $_SESSION["login"] =  $myArr[0];
        header("Location: ./index.php");
        exit();
    }
    else if ($myArr[0] == 2){
        $_SESSION["login"] =  $myArr[0];
        header("Location: ./index.php");
        exit();
    }
    else if ($myArr[0] == 3){
        $_SESSION["login"] =  $myArr[0];
        $_SESSION["nome"] =  $myArr[1];
        header("Location: ./index2.php");
        exit();
    }
    else if ($myArr[0] == 4){
        $_SESSION["login"] =  $myArr[0];
        header("Location: ./index.php");
        exit();
    }

}
?>
