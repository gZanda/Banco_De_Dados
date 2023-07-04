<h1> Editar Usuário </h1>

<?php

    $sql = "SELECT * FROM usuario WHERE id=".$_REQUEST["id"];   // Seleciona de acordo com o ID do usuário que veio pela URL

    $res =  $con->QUERY($sql);

    $linha = $res->fetch_object();

?>

<form action="?page=salvar" method="POST">                  <!-- "action" == O que o form faz após clicar em SUBMIT -->
    <input type="hidden" name="acao" value="editar">        <!-- Apenas para enviar essa "acao" escondido ( sem escrever na URL ), vai lá pro case -->
    <input type="hidden" name="id" value="<?php echo $linha->id; ?>"    

    <div>
        <label>Nome</label>
        <input type="text" name="nome" class="form-control" value="<?php echo "$linha->nome"; ?>">  <!-- "Value" Já escreve na caixa os dados -->
    </div>

    <div>
        <label>Telefone</label>
        <input type="number" name="telefone" class="form-control" value="<?php echo "$linha->telefone"; ?>">    <!-- "Value" Já escreve na caixa os dados -->
    </div>

    <div>
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>

</form>