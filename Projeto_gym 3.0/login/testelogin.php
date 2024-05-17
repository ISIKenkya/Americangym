<?php
session_start();

if (isset($_POST['submit']) && !empty($_POST['login']) && !empty($_POST['senha'])) {
    include_once ('../assets/php/connect.php');

    $login = $_POST['login'];
    $senha = $_POST['senha'];

    // Preparar a declaração SQL para evitar SQL Injection
    $stmt = $conexao->prepare("SELECT * FROM funcionarios WHERE login = ? and senha = ?");
    $stmt->bind_param("ss", $login, $senha);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows < 1) {
        // Limpar as variáveis de sessão e redirecionar para a página de login
        unset($_SESSION['login']);
        unset($_SESSION['senha']);
        header('Location: login.html');
    } else {
        // Definir as variáveis de sessão e redirecionar para a página principal
        $_SESSION['login'] = $login;
        $_SESSION['senha'] = $senha;
        header('Location: testeindex.php');
    }

    // Fechar a declaração
    $stmt->close();
    // Fechar a conexão
    $conexao->close();

} else {
    // Redirecionar para a página de login se os campos não estiverem preenchidos
    header('Location: login.html');
}
?>
