<?php

include_once ('../assets/php/connect.php');
$sql = "SELECT * FROM alunos ORDER BY id DESC";
$result = $conexao->query($sql);

    while($user_data = mysqli_fetch_assoc($result)) {
                        
        echo  "<tr>";
        echo "<td>".$user_data['id']."</td>"; 
        echo "<td>".$user_data['nome']."</td>";
        echo "<td>".$user_data['data_nasc']."</td>";
        echo "<td>".$user_data['cpf']."</td>";
        echo "<td>".$user_data['telefone']."</td>";
        echo "<td>".$user_data['email']."</td>";
        echo "<td>".$user_data['endereco']."</td>";
        echo "<td>".$user_data['numende']."</td>";
        echo "<td>".$user_data['plano']."</td>";
        echo "<td>".$user_data['tipoaluno']."</td>";
        echo "<td>".$user_data['obs']."</td>";
                        
        echo  "</tr>";
                        
        }
?>