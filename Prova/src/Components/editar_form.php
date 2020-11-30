<?php

session_start();
include ("../service/conexao.php");
$id=$_GET['id'];


$SQL= "SELECT Category, Color, FirtName,Vaalue FROM SHIRT WHERE Id=$id";

//EXECUTANDO O COMANDO SQL
$result=$link ->query($SQL) or  die("Query falhou");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- <link rel="stylesheet" href="../src/style/header.css"> -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" >

  <title>Amazon</title>
</head>
<body>
  <div  >
    <img src="../img/logo.png" class="w-25 p-5"  alt="logo">
    </div>
  
<form  action="../Components/editar.php?id=<?php echo $id?>" method="POST"> 
<h2 class="text-center">  EDITAR PRODUTO</h2>
<div class="larger container">

<?php while($row = mysqli_fetch_assoc($result)) 
{ 
  
  ?>
<div class="container-1">
  <label>Firt Name Shirt</label>
 <input  class="form-control" type="text" id="FirtName" name="FirtName" value="<?php  echo $row['FirtName']; ?>" placeholder="<?php $row['FirtName']; ?>"/>
</div>

<div class="container-2">
  <label>Color</label>
 <input class="form-control" type="text" id="Color"  name="Color" value="<?php echo $row['Color'] ;?>" placeholder="Insert shirt color"/>
</div>

<div class="form-group">
  <label >Category</label>
  <select  class="form-control"   value="" name="Category" id="category">
  <option value="-"></option>
<option value="kid">Kid</option>
<option value="masculine">Masculine</option>
<option value="feminine">feminine</option>
</select>
</div>

<div class="container-4">
  <label>Money</label>
 <input class="form-control" type="text" id="money" value="<?php  echo $row['Vaalue'] ;?>"  name="Vaalue"placeholder="Enter the value"/>
</div>
<?php }?>
<br>
<br>
<a href="./editar.php?id=<?php echo $row['Id'] ; ?>"><input class="btn btn-primary mb-2" type="submit" name="button" value="Editar" /></a>
</div>
</form>


<footer class="page-footer font-small indigo">


  <div class="container text-center text-md-left">

    <div class="row">

      <div class="col-md-3 mx-auto">


        <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Conheça-nos</h5>

        <ul class="list-unstyled">
          <li>
            <a href="#!">informações coporativas</a>
          </li>
          <li>
            <a href="#!">Carreiras</a>
          </li>
          <li>
            <a href="#!">COmunicados à imprensa</a>
          </li>
          <li>
            <a href="#!">Comunidade</a>
          </li>
        </ul>

      </div>


      <hr class="clearfix w-100 d-md-none">


      <div class="col-md-3 mx-auto">


        <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Ganhe dinheiro conosco</h5>

        <ul class="list-unstyled">
          <li>
            <a href="https://kdp.amazon.com/?language=pt_BR">Publique seus livros</a>
          </li>
          <li>
            <a href="https://associados.amazon.com.br/">Seja um associado</a>
          </li>
          <li>
            <a href="#!">Venda na Amazon</a>
          </li>
        </ul>

      </div>


      <hr class="clearfix w-100 d-md-none">


      <div class="col-md-3 mx-auto">

     
        <h5 class="font-weight-bold text-uppercase mt-3 mb-4">	
          Deixe-nos ajudá-lo</h5>

        <ul class="list-unstyled">
          <li>
            <a href="https://www.amazon.com.br/gp/css/homepage.html?ie=UTF8&ref_=footer_ya">Sua conta</a>
          </li>
          <li>
            <a href="https://www.amazon.com.br/gp/help/customer/display.html?ie=UTF8&nodeId=201365500&ref_=footer_shiprates">Frete e prazo de entrega
            </a>
          </li>
    
        </ul>

      </div>

      <hr class="clearfix w-100 d-md-none">


      <div class="col-md-3 mx-auto">

        <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Pagamento</h5>

        <ul class="list-unstyled">
          <li>
            <a href="https://www.amazon.com.br/gp/help/customer/display.html?ie=UTF8&nodeId=GDFU3JS5AL6SYHRD&ref_=footer_covid">Amazon e COVID-19</a>
          </li>
          <li>
            <a href="https://www.amazon.com.br/b?ie=UTF8&node=16568920011&ref_=footer_pay_tc">Cartões de crédito e Boleto</a>
          </li>
        </ul>
      </div>
    </div>


  </div>

  <div class="footer-copyright text-center py-3">© 2020 Desenvolvido por :
    <a href="https://mdbootstrap.com/"> Luiz GUstavo</a>
  </div>


</footer>

</body>
</html>
