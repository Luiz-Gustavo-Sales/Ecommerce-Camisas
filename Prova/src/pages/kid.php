<?php
include ("../service/conexao.php");

$Kid = $_POST['Kid'];
// INSERINDO VALORES NO BANCO DE DADOS
$SQL= "SELECT  Category  FROM  SHIRT  WHERE Category=$Kid";
//EXECUTANDO O COMANDO SQL
$category_Kid=$link ->query($SQL) or  die("Query falhou");

echo ($category_Kid);

?>