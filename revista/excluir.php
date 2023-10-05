<?php
require_once "conexao.php";


$id = $_GET['id'];

$buscarnomearquivo= "SELECT foto FROM usuario WHERE id_usuario=$id";
$executabusca = mysqli_query($conexao,$buscarnomearquivo);
$dados = mysqli_fetch_array($executabusca);
$nomearquivo = $dados['foto'];

$query = "DELETE FROM usuario WHERE id_usuario=$id";
$executar = mysqli_query($conexao, $query);
$caminhofinal = 'img/'.$nomearquivo;
$apagar = unlink($caminhofinal);

if($executar==TRUE AND $apagar==TRUE) {
        echo "
        <script>
                alert('Registro apagado com sucesso');
        </script>
        ";
} else {
        echo "
        <script>
                alert('O registro não foi apagado');
        </script>
        ";
}
?>