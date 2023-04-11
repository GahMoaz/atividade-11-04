<?php
           
       
  ?>

<?php 

session_start();
$_SESSION['email'] = $_POST['email'];
$_SESSION['nome'] = $_POST['nome'];
$_SESSION['cpf'] = $_POST['cpf'];
$_SESSION['estado'] = $_POST['estado'];
$_SESSION['cep'] = $_POST['cep'];
$_SESSION['cidade'] = $_POST['cidade'];
$_SESSION['mensagem'] = $_POST['mensagem'];
$_SESSION['senha'] = $_POST['senha'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title> <link rel="stylesheet" href="style2.css">
</head>
<body>
  

<div class="titulo1">


    <div class="t1"><h2>Gestão de Dados</h2></div>
    <div class="t2">
    
    <div class="butoes">   <p><p></p></p> </div>
    </div>

   </div>
<div class="titulo">


    <div class="t1"><h1>Detalhes do Aluno</h1></div>
    

    <table style="width:50%">
    
    <tr>
  
      <td>
        <?php echo"Email:";
        ?>
        </td>
      <td>
        <?php echo $_SESSION['email'];?></td>
      </tr>

      <tr>
    <td> <?php echo"Nome:"; ?></td>
    <td> <?php echo $_SESSION['nome']; ?> </td>
    </tr>
  
  
    <tr>
    <td> <?php echo"Senha:"; ?></td>
    <td> <?php echo $_SESSION['senha']; ?> </td>
    </tr>

  
    <tr>
    <td> <?php echo"Cidade:"; ?></td>
    <td> <?php echo $_SESSION['cidade']; ?> </td>
    </tr>

    
    <tr>
    <td> <?php echo"CPF:"; ?></td>
    <td> <?php  echo $_SESSION['cpf']; ?> </td>
    </tr>

    <tr>
    <td> <?php echo"Mensagem:";  ?></td>
    <td> <?php echo $_SESSION['mensagem'];  ?> </td>
    </tr>

    <tr>
    <td> <?php echo"Cep:";  ?></td>
    <td> <?php echo $_SESSION['cep'];  ?> </td>
    </tr>

    <tr>
    <td> <?php echo"Estado:";  ?></td>
    <td> <?php echo $_SESSION['estado'];  ?> </td>
    </tr>


    
  </tr>
  </table>
 <form action="editar-dados.php" method="post">
  <button type="submit"> Visualizar</button>
 </form>

  
</body>
</html>






