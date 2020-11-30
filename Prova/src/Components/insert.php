<?php
include ("../service/conexao.php");

$firtname = $_POST['FirtName'];
$color = $_POST['Color'];
$category = $_POST['Category'];
$vaalue = $_POST['Vaalue'];
// INSERINDO VALORES NO BANCO DE DADOS
$SQL= "INSERT INTO  SHIRT (FirtName,Color,Category,Vaalue) 
VALUES ('$firtname','$color','$category','$vaalue')";
//EXECUTANDO O COMANDO SQL
$link ->query($SQL) or  die("Query falhou");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" >
  <link rel="stylesheet" href="../sryle/header.css" >
  <title>Cadastro com sucesso</title>
</head>
<body>
<h1 class="text-center">CADASTRO REALIZADO COM SUCESSO</h1>
<a href="../pages/cadastrar.html"><button class="btn btn-primary mb-2 text-center " > Voltar</button></a>
</body>
</html>