

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title> <link rel="stylesheet" href="style.css">
</head>
<body>
    
<?php
 include_once ("header.php");
 ?>



<div class="conteudo">
    <div class="c1">

        <div class="p1">
                
        <h2>FORMULARIO DE CADASTRO</h2>
    
                
        <form class="form" form action="mostraaluno.php" method="post">
    
        <div class="f1">
    
            <div class="caixa1">
                
                <div class="nome">
            <p> Nome: <br><input class="name" type="text"  placeholder="" name="nome" requerid/> </p>
        </div>
            <p> CPF: <br><input class="cpf" type="text"  placeholder="" name="cpf" requerid /> </p>      
            </div>
                        
            <div class="caixa2">
                <div class="ema">
            <p> Email: <br>  <input class="email" type="email" placeholder="Email para contato" id="email" name="email" requerid/> </p>
        </div>
            <p> Senha: <br>  <input class="senh" type="password" placeholder="Informe a senha"  name="senha" requerid /> </p>
            </div>    
        </div>
              
            
         <div class="caixa3">
            <div class="cidade">
                <p> Cidade: <br> <input class="cidade"  type="text" placeholder="" name="cidade" requerid /> </p>
            </div>
            <div class = 'estado'>
                <label class=''>Estado: </label>
                <br>
                
                <select name="estado" class='estado'  >
                <option value="" selected="selected"></option>
                <option value="AC">AC</option>
                
                </select>
                </div> 
                
                <div class="cep">           
                    <label class="cep" for="cep">Cep:</label>  <br>
                    <input type="text" name="cep" id="cep" class="cep" value="" />
                </div>

         </div>
    <div class="caixa4">
        <div class="mensagem">
        <p> Mensagem: <br>
        <textarea name="mensagem" rows="3" cols="53">Digite uma mensagem...</textarea>
        <br><br>
    </div>
  <div class="sexo">
  <div class="fem">
  <input type="radio" id="feminino" name="feminino" value="feminino">
  <label for="feminino">Feminino</label><br>
  </div>
<div class="masc">
  <input type="radio" id="masculino" name="masculino" value="masculino">
  <label for="maculino">Masculino</label><br>
  </div>
</div>

    </div>
         
         
         </div>
                        
                        
    </div>
    
        <input type="hidden" name="form_submit"  VALUE="ok">
        <br><br>
            
        <div class="enviar"><button  type="submit" class="btn">
        <b>Cadastrar</b>
        </button>
        </div>
                        
    </form>
    </div>
    </div>
    
</div>





</body>
</html>

<?php
 include_once ("footer.php");
 ?>


