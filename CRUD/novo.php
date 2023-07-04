<h1>Novo Usuário</h1>

<form action="?page=salvar" method="POST">                  <!-- "action" == O que o form faz após clicar em SUBMIT -->
    <input type="hidden" name="acao" value="cadastrar">     <!-- Apenas para enviar essa "acao" escondido ( sem escrever na URL ), vai lá pro case -->

    <div>
        <label>Nome</label>
        <input type="text" name="nome" class="form-control">
    </div>

    <div>
        <label>Telefone</label>
        <input type="number" name="telefone" class="form-control">
    </div>

    <div>
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>

</form>