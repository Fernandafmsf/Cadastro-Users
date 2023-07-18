<?php //criando ações para cada parte do crud
  switch($_REQUEST["acao"]){

    case 'cadastrar':
      $nome=$_POST["nome"]; //criando uma variavel e linkando com as da tabela
      $email=$_POST["email"];
      $senha=md5($_POST["senha"]); //md5 criptografa a senha e faz não mostrar a senha no banco de dados 
      $data_nasc=$_POST["data_nasc"];

      $sql="INSERT INTO usuarios (nome,email,senha,data_nasc) VALUES ('{$nome}','{$email}','{$senha}','{$data_nasc}')"; 
      //comando sql mandando fazer um query do tipo insert na tabela usuarios, que possui as colunas mencionadas e com os valores mencionados, que sao as variaveis criadas acima 

      $resultado=$conn->query($sql); //realizando a conexao

      if($resultado){
        print"<script>alert('Cadastro feito com sucesso');</script>";
        print"<script>location.href='?page=listar';</script>"; //direcionando para outra pagina
      }else{
        print"<script>alert('Cadastro não realizado');</script>";
        print"<script>location.href='?page=listar';</script>"; 
      }
    break;

    case 'editar':

      $nome=$_POST["nome"];
      $email=$_POST["email"];
      $senha=md5($_POST["senha"]);
      $data_nasc=$_POST["data_nasc"];

      $sql="UPDATE usuarios SET
              nome='{$nome}',
              email ='{$email}',
              senha ='{$senha}',
              data_nasc ='{$data_nasc}'
           WHERE id=".$_REQUEST["id"]; 

      $resultado=$conn->query($sql); 

      if($resultado){
        print"<script>alert('Edição feita com sucesso');</script>";
        print"<script>location.href='?page=listar';</script>"; //direcionando para outra pagina
      }else{
        print"<script>alert('Edição não realizada');</script>";
        print"<script>location.href='?page=listar';</script>"; 
      }
    break;

    case 'excluir':
      
      $sql="DELETE FROM usuarios WHERE id=".$_REQUEST["id"]; 

      $resultado=$conn->query($sql); 

      if($resultado){
        print"<script>alert('Excluido com sucesso');</script>";
        print"<script>location.href='?page=listar';</script>"; //direcionando para outra pagina
      }else{
        print"<script>alert('Exclusão não realizada');</script>";
        print"<script>location.href='?page=listar';</script>"; 
      }

    break;
  }
?>