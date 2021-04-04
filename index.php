<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="facebook1.ico" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Facebook Login</title>
    <link rel="stylesheet" type="text/css" href="estilos.css" media="screen" />
</head>
<body>
    <header class="cabecalho">
        <div class="facebook">
            <figure id="facebook">
                <img src = "img/facebook.png">
            </figure>
        </div>
    <div class="formulario">
    <form method="POST" action="processa.php">
        <div class="email">
        <legend>Digite seu E-mail:</legend>
        <input type="email" name="email" value="" required>
        </div>
        <div class="senha">
        <legend>Senha:</legend>
            <input type="password" name="senha" value="" required>
            <p><a href="#">Esqueceu a conta?</a></p>
            
            <input type = "submit" class = "enviar" value = "Enviar">
    </form>
    </div>
    </header>
    <h1>Facebook Login</h1>
    <h3><strong>Criar uma nova conta.<br></strong>
        BemVindo(a) novamente ao Facebook!<br>
        Se você já possui uma conta,<br>
         acesse informando seu E-mail e Senha<br>
         nos campos logo acima para <br>
         acessar sua conta. Caso contrario,<br>
          você ainda não tenha uma conta,<br>
        Crie uma conta Clicando no botão<br>
         logo abaixo.</h3>

   <input type="submit" class="enviar2" name="Enviar" value="Cadastre - se">
</body>
</html>