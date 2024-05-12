<?php
// Verifica se os dados do formulário foram enviados
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recebe os dados do formulário
    $nome = $_POST["nome"];
    $telefone = $_POST["telefone"];

    // Conecta-se ao banco de dados PostgreSQL
    $conexao = pg_connect("host=localhost dbname=american user=postgres password=123456");

    // Verifica se a conexão foi bem-sucedida
    if (!$conexao) {
        die("Erro ao conectar ao banco de dados.");
    }

    // Prepara a consulta SQL para inserir os dados na tabela "alunos"
    $consulta = "INSERT INTO alunos (nome, telefone) VALUES ('$nome', '$telefone')";

    // Executa a consulta
    $resultado = pg_query($conexao, $consulta);

    // Verifica se a consulta foi bem-sucedida
    if ($resultado) {
        echo "Dados inseridos com sucesso!";
    } else {
        echo "Erro ao inserir dados.";
    }

    // Fecha a conexão com o banco de dados
    pg_close($conexao);
}
?>
