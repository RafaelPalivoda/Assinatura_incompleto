<?php
    if(isset($_POST["gerar"])){
        echo "<script> alert ('Sua assinatura será gerada em seguida')</script>";
    }
$nome= $_POST["nome"];
$cargo= $_POST["cargo"];
$email= $_POST["email"];
$unidade= $_POST["unidade"];
echo "Seu nome é: " . $nome;
echo "Seu cargo é: " . $cargo;
echo "Seu email é: " . $email;
echo "Está alocado em: " . $unidade;
?>