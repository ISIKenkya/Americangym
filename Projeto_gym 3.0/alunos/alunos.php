<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <link rel="icon" href="C:\Users\comer\Desktop\Loui\Code\img\favico.ico" type="image/x-icon">
    <link rel="stylesheet" href="../assets/css/index.css">
    <link rel="stylesheet" href="./alunos.css">
    <title>Alunos</title>
</head>

<body>
    <div class="bgimg">
        <ul>
            <li><a class="home" href="../index.html">Início</a></li>
            <li><a href="../cadaluno/cadaluno.html">Cadastrar</a></li>
            <li><a href="../financeiro/financeiro.html">Financeiro</a></li>
            <li><a href="../funcionarios/funcionarios.html">Funcionários</a></li>
            <li><a class="active" href="../login/login.html">Sair</a></li>
        </ul> 
        
        <div class="m-5" id="m-5">
            <table class="table text-white table-bg">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Data_Nasc</th>
                        <th scope="col">CPF</th>
                        <th scope="col">telefone</th>
                        <th scope="col">E-mail</th>
                        <th scope="col">Endereço</th>
                        <th scope="col">Nº</th>
                        <th scope="col">Plano</th>
                        <th scope="col">User Type</th>
                        <th scope="col">OBS</th>
                    </tr>
                </thead>
                <tbody>
                    <?php include('alunosteste.php'); ?>
                </tbody>
            </table>
        </div>
    </div>
    </div>
    
</body>

</html>