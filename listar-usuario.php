<h1>Listar usuários</h1>

<?php
//analisar essa parte a fundo 
//entender fetch_object 
//entender como o resultado da query chega em 'res'
//num_rows é tipo uma função que devolve a quantidade de linhas?
//pq comparou row com res no laço while?


  $sql="SELECT * FROM usuarios";

  $res = $conn->query($sql);

  $qtd = $res->num_rows;

  if($qtd>0){
    //criando cabeçalho 

    print"<table class='table table-striped table-hover table-bordered'>";
      print"<tr>";
        print"<th>#</th>";
        print"<th>Nome</th>";
        print"<th>E-mail</th>";
        print"<th>Data de nascimento</th>";
        print"<th>Ações</th>";
      print"</tr>";

    while($row=$res->fetch_object()){
      print"<tr>";
        print "<td>".$row->id."</td>";
        print"<td>".$row->nome."</td>";
        print "<td>".$row->email."</td>";
        print "<td>" .$row->data_nasc."</td>";

        print "<td> <button onclick=\"location.href='?page=editar&id=".$row->id."'\" class='btn btn-success'>Editar</button>

        <button class='btn btn-danger' onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=salvar&acao=excluir&id=".$row->id."';}else{false;}  \">Excluir</button</td>";

      print"</tr>";  
    }
    print"</table>";

  }else{
    print"<p class='alert alert-danger'>Não encontrou resultados.</p>";
  }

?>