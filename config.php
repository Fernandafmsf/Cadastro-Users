<?php 
//CRIANDO CONEXÃO COM BANCO DE DADOS 
//ESSE ARQUIVO PRECISA ESTAR INCLUSO EM OUTROS ARQUIVOS PHP, COMO NO INDEX
  
  define('HOST', 'localhost'); //nome servidor
  define('USER','root');
  define('PASS','admin');
  define('BASE','cadastro'); //nome da tabela criada no mysql

  $conn=new MySQLi(HOST,USER,PASS,BASE);
  if(!$conn){
    die('Connection failed'.mysqli_conect_error());
  }
?>