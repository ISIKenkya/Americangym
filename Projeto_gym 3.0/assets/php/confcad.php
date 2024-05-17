<?php
if (isset($_POST['submit'])){
 
    include_once('connect.php');

    $login = $_POST ['login'];
    $senha = $_POST ['senha'];

    $result = mysqli_query($conexao, "INSERT INTO funcionarios(login,senha)
    VALUES ('$login','$senha')");
}

header("Location: cadastro.html");
exit;

?>