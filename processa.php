<?php
    include_once("conexao.php");

    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);

    //echo "Email: $email<br>";
    //echo "Senha: $senha<br>";

    $result_usuario = "INSERT INTO usuarios4 (email, senha) VALUES($email, $senha))";
    $resultado_usuario = mysqli_query($conn, $result_usuario);

    $result_usuario = "INSERT INTO usuarios4 (email, senha) VALUES('$email','$senha')";

    $resultado_usuario = mysqli_query($conn, $result_usuario);
?>
