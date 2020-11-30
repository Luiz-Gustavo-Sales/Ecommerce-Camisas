<?php 
session_start();
include ("../service/conexao.php");
$id=$_GET['id'];
$SQL= "DELETE FROM  SHIRT WHERE Id=$id";

//EXECUTANDO O COMANDO SQL
$result=$link ->query($SQL) or  die("Query falhou");



?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" >
  <title>Document</title>
</head>
<body>
  <h1 class="text-center"> ITEM DELETADO COM SUCESSO</h1>
  <a href="../pages/produtos.html"><button class="text-center btn btn-primary mb-2"> Voltar</button></a>
</body>
</html>