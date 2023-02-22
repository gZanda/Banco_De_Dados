<?php

    switch ($_REQUEST["acao"]) {
        case 'cadastrar':
            $nome = $_POST["nome"];
            $telefone = $_POST["telefone"];

            $sql = "INSERT INTO usuario (nome, telefone) VALUES ('{$nome}', '{$telefone}')";    // Código da QUERY de INSERÇÂO

            $res = $con->query($sql);   // Chamada dessa QUERY, armazena o resultado nessa variável "$res" ( tem que chamar pela coneção com SQL "$con")

            if($res){
                echo "<script>alert('Cadastro Feito com Sucesso');</script>";     // Alert
                echo "<script>location.href='?page=listar';</script>";      // Redireciona
            }
            else{
                echo "<script>alert('Cadastro Feito com Falha');</script>";
                echo "<script>location.href='?page=novo';</script>";
            }
        break;

        case 'editar':
            $nome = $_POST["nome"];
            $telefone = $_POST["telefone"];

            $sql = "UPDATE usuario SET nome='{$nome}', telefone='{$telefone}' WHERE id=".$_REQUEST["id"];   // Código da QUERY usando o q veio "hidden"

            $res = $con->query($sql);   // Chamada dessa QUERY, armazena o resultado nessa variável "$res" ( tem que chamar pela coneção com SQL "$con")

            if($res){
                echo "<script>alert('Cadastro Alterado com Sucesso');</script>";     // Alert
                echo "<script>location.href='?page=listar';</script>";               // Redireciona
            }
            else{
                echo "<script>alert('Cadastro Alterado com Falha');</script>";
                echo "<script>location.href='?page=novo';</script>";
            }
        break;

        case 'excluir':

            $sql = "DELETE FROM usuario WHERE id=".$_REQUEST["id"];

            $res = $con->query($sql);   // Chamada dessa QUERY, armazena o resultado nessa variável "$res" ( tem que chamar pela coneção com SQL "$con")

            if($res){
                echo "<script>alert('Cadastro Excluído com Sucesso');</script>";     // Alert
                echo "<script>location.href='?page=listar';</script>";               // Redireciona
            }
            else{
                echo "<script>alert('Cadastro Excluído com Falha');</script>";
                echo "<script>location.href='?page=novo';</script>";
            }

        break;
    }

?>