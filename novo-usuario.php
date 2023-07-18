<h1>Novo usuário</h1>

<form action="?page=salvar" method="POST"><!--na hora de enviar deve ser sempre tipo post porque aí nao mostra a senha digitada-->
  <div class="mb-3">
    <input type="hidden" name="acao" value="cadastrar"><!--essa linha vai ativar o cadastrar-->
    <label >Nome</label>
    <input type="text" name="nome" class="form-control" required>
  </div>

  <div class="mb-3">
    <label >E-mail</label>
    <input type="text" name="email" class="form-control" required>
  </div>

   <div class="mb-3">
    <label >Senha</label>
    <input type="password" name="senha" class="form-control" required>
  </div>

   <div class="mb-3">
    <label >Data de Nascimento</label>
    <input type="date" name="data_nasc" class="form-control" required>
  </div>

  <div class="mb-3">
    <button type="submit" class="btn btn-primary btn-lg">Enviar</button>
  </div>
</form>