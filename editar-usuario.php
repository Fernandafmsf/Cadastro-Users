<h1>Editar usuário</h1>

<!--Vem pra ca através da pag. 'novo usuario'-->

<?php 

  $sql="SELECT * FROM usuarios WHERE id=".$_REQUEST["id"];
  $res = $conn->query($sql);

  $row = $res->fetch_object();

?>

<form action="?page=salvar" method="POST">

  <div class="mb-3">
    <input type="hidden" name="acao" value="editar"><!--'ativa' o case "editar" em salvar-usuario-->
    <input type="hidden" name="id" value="<?php print $row->id; ?>"> <!--envia o id que está sendo modificado. importante ter para não perder a informação -->

    <label >Nome</label>
    <input type="text" name="nome" value="<?php print $row->nome; ?>" class="form-control" >
  </div>

  <div class="mb-3">
    <label >E-mail</label>
    <input type="text" name="email" value="<?php print $row->email; ?>" class="form-control">
  </div>

   <div class="mb-3">
    <label >Senha</label>
    <input type="password" name="senha" class="form-control" required>
  </div>

   <div class="mb-3">
    <label >Data de Nascimento</label>
    <input type="date" name="data_nasc" value="<?php print $row->data_nasc; ?>" class="form-control" >
  </div>

  <div class="mb-3">
    <button type="submit" class="btn btn-primary btn-lg">Editar</button>
  </div>
</form>