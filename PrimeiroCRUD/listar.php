<h1>Lista de Usuários</h1>
<?php

    $sql = "SELECT * FROM usuario";     // Código da QUERY
    
    $res =  $con->QUERY($sql);          // Chamada da Query, Através da Conexão "$con"

    $nLinhas = $res->num_rows;           // Função para encontrar o número de linhas na tabela

    if($nLinhas == 0){
        echo "<p class='alert alert-danger'> Não há Usuários Cadastrados </p>";
    }
    else{
        echo "<table class='table table-hover table-striped table-bordered'>";
            echo "<tr>";
                echo "<th>Id</th>";
                echo "<th>Nome</th>";
                echo "<th>Telefone</th>";
                echo "<th>Ações</th>";
            echo "<tr>";
            
            while($linha = $res->fetch_object()){   // Esse "fetch" pega linha por linha do que está no "$res" e vai coloando na outra variável "$linha"
                echo "<tr>";
                    echo "<td> $linha->id </td>";
                    echo "<td> $linha->nome </td>";
                    echo "<td> $linha->telefone </td>";
                    echo "<td> <button class='btn btn-success' onclick=\"location.href='?page=editar&id=".$linha->id."';\">Editar</button> 
                               <button class='btn btn-danger' onclick=\"location.href='?page=salvar&acao=excluir&id=".$linha->id."';\">Excluir</button> </td>";
                echo "<tr>";
            }
        echo "</table>";
    }

?>