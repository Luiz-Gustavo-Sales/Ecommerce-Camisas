<?php
include ("../service/conexao.php");

//ID DA ROTA PARA PODER LISTAR AS CATEGORIAS
$ID=$_GET['id'];


if ($ID==1){
  $SelectGategory="Kid";
  $tipo_categoria="INFANTIL";
} else if ($ID==2){
  $SelectGategory="Masculine";
  $tipo_categoria="MASCULINO";
}else {
  $SelectGategory="feminine";
  $tipo_categoria="FEMININA";
}

// INSERINDO VALORES NO BANCO DE DADOS
$SQL= "SELECT  Id , FirtName, Category, Color, Vaalue FROM  SHIRT  WHERE  Category='$SelectGategory'";
//EXECUTANDO O COMANDO SQL

$result=$link ->query($SQL) or  die("Query falhou");



?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" >
  <link rel="stylesheet" href="../style/header.css" >
  <script src="../pages/script.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PRODUTOS</title>
</head>
<body>
<a href="../pages/produtos.html"><button class="btn btn-primary mb-2 text-center " > Voltar</button></a>
<h1 class="text-center"> CATEGORIA <?php echo $tipo_categoria ;?></h1>

<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Estampa</th>
      <th scope="col">Cor</th>
      <th scope="col">Valor</th>

      </tr>
      </thead>
  <?php 

while($row = mysqli_fetch_assoc($result)){
?>
    
<tbody>
      <th scope="row"><?php echo  $row['Id']; ?></th>
      <td><?php echo  $row['FirtName']; ?></td>
      <td><?php echo $row['Color']; ?></td>
      <td><?php echo  $row['Vaalue'];?></td>
      <td><a href="./delete.php?id=<?php echo $row['Id']?>" ><button class="btn btn-primary mb-1"> DELETAR</button></a></td>
      <td><a href="./editar_form.php?id=<?php echo $row['Id']?>" ><button class="btn btn-primary mb-1"> EDITAR</button></a></td>

<?php 
  }

?>
  </tbody>
</table>
</body>
</html>
