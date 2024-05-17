<?php
session_start();

if (!(isset($_SESSION['login']) && isset($_SESSION['senha']))) {
    unset($_SESSION['login']);
    unset($_SESSION['senha']);
    header('Location: login.html');
    exit; // Certifique-se de sair do script após o redirecionamento
}

$logado = $_SESSION['login'];

?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="navbar.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TesteLogin</title>
</head>

<body>
    <div class="bgimg">
        <div class="centervid">
            <ul>
                <li><a class="home" href="index.html">Home</a></li>
                <li><a href="alunos.html">Alunos</a></li>
                <li><a href="financeiro.html">Financeiro</a></li>
                <li><a href="funcionarios.html">Funcionários</a></li>
                <li style="float: right;"><a class="active" href="../assets/php/sair.php">Sair</a></li>
                
            </ul>
            <?php
             echo "<h1>LOGADO!! Senhor (a) $logado</h1>";
            ?>    
                </div>
    </div>
    
</body>

</html>