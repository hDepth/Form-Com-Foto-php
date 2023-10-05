<?php 
require_once "conexao.php";

$id = $_GET['id'];
$query = "SELECT * FROM usuario WHERE id_usuario=$id";
$data = date_create_from_format('dmY', '15102023');
$executar = mysqli_query($conexao, $query);
$dados = mysqli_fetch_array($executar);

echo "<link rel='stylesheet' type='text/css' href='detalhe.css'>";
echo "<p>Nome: $dados[nome]</p>";
echo "<p>Data Nascimento". date_format($data,'d-m-Y').;
echo "<p>Email: $dados[email]</p>";
echo "<p>Id: $dados[id_usuario]</p>";
echo "<p><a href='excluir.php?id=$dados[id_usuario]'>Excluir</a></p>";

// print_r($dados);
?>