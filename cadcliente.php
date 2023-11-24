<?php
session_start();
include('config.php');

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $nome = $_POST['nome'];
    $telefone = $_POST['telefone'];
    $endereco = $_POST['endereco'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
 
    

    $in = mysqli_query($conexao, "INSERT INTO cliente(nome, telefone, endereco, email, senha) 
    Values ('$nome', '$telefone', '$endereco', '$email', '$senha')") or die("Erro");  
}




if($in)
{

    header('Location: carrinho.php');
}
else {
    header('Location: cadastro.php');
}

?>