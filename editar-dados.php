<?php 

session_start();

$nome = $_SESSION['nome'];
$cpf = $_SESSION['cpf'];
$email = $_SESSION['email']; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Document</title>
</head>
<body>
<div class="legal">
    <div class="title">
        Editar dados
    </div>

      <form action="mostraaluno.php" method="post">
        <div class="line1">
          <label for="name"> Nome:</label><br>
            <input type="text" id="name" name="name" value="<?php echo $nome;?>">
        </div>
        
        <div class="line2">
            <label for="cpf"> CPF:</label><br>
            <input type="tel" id="cpf" name="cpf" value="<?php echo $cpf;?>">
        </div>

        <div class="line3">
            <label for="matricula"> Matricula:</label><br>
            <input type="tel" id="matricula" name="matricula" value="<?php echo $matricula;?>">
        </div>

        <div class="line4">
        <button class= "button-editar" type="submit"> Editar</button>
        </div>
      </form>
</div>
</body>
</html>