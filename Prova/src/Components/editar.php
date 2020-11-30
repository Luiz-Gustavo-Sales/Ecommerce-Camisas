<?php

session_start();
include ("../service/conexao.php");
$id=$_GET['id'];
$firtname = $_POST['FirtName'];
$color = $_POST['Color'];
$category = $_POST['Category'];
$vaalue = $_POST['Vaalue'];


$SQL= "UPDATE SHIRT SET Category='$category', Color='$color', FirtName='$firtname',Vaalue='$vaalue' WHERE Id=$id";

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
  <h1 class="text-center" > CLIENTE ATUALIZADO COM SUCESSO</h1>
  <a href="../pages/produtos.html"><button class="btn btn-primary mb-2 text-center " > Voltar</button></a>
</body>
</html>