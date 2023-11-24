<?php

$servidor="localhost";
$usuario="root";
$senha="";
$bdname="marmitaria";
$conexao = mysqli_connect($servidor,$usuario,$senha,$bdname) or die ('Erro de conexão com o banco de dados');
?>