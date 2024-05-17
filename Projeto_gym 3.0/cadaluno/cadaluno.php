<?php
if (isset($_POST['submit'])){
 
    include_once ('../assets/php/connect.php');

    $nome = $_POST ['nome'];
    $data_nasc = $_POST ['nascimento'];
    $cpf = $_POST ['cpf'];
    $telefone = $_POST ['telefone'];
    $email = $_POST ['email'];
    $endereco = $_POST ['endereco'];
    $numende = $_POST ['numende'];
    $plano = $_POST ['plano'];
    $tipoaluno = $_POST ['tipocadastro'];
    $obs = $_POST ['obscadastro'];

    $result = mysqli_query($conexao, "INSERT INTO alunos(nome,data_nasc,cpf,telefone,email,endereco,numende,plano,tipoaluno,obs)
    VALUES ('$nome','$data_nasc','$cpf','$telefone','$email','$endereco','$numende','$plano','$tipoaluno','$obs')");
}

header("Location: cadaluno.html");
exit;

?>
