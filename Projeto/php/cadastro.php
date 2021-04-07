<?php
include("conecta.php");

$nome = $_POST["nome"];
$email = $_POST["email"];
$sexo = $_POST["sexo"];
$ddd = $_POST["ddd"];
$tel = $_POST["telefone"];
$estado = $_POST["estado"];
$cidade = $_POST["cidade"];
$endereco = $_POST["endereco"];
$bairro = $_POST["bairro"];

$query = "INSERT TO 'clientes' ('nome', 'email', 'sexo', 'ddd', 'tel', 'estado', 'cidade', 'endereco', 'bairro')
VALUES ('$nome','$email', '$sexo', '$ddd', '$tel', '$estado', '$cidade', '$endereco', '$bairro')";

?>