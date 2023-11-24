<?php
session_start();
include('config.php');
$email = $_POST['email'];
$senha = $_POST['senha'];
$in = mysqli_query($conexao, "INSERT INTO cliente(  email, senha) 
Values ( '$email', '$senha')") or die("Erro");
if($in)
{

    header('Location: carrinho.php');
}
else {
    header('Location: logcliente.php');
}
?>