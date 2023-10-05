<?php
require_once "conexao.php";

$query = "SELECT id_usuario, nome FROM usuario ORDER BY nome ASC";

$executar = mysqli_query($conexao, $query);

echo "
<table border='3'>
<tr>
  <td>Nome</td>
  <td>Ver detalhes</td>
</tr>
<button><a terget='_blank' href='cadastro.php'>Tela de cadastro</a></button>
</table>
<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css' integrity='sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u' crossorigin='anonymous'>
           <link rel='stylesheet' type='text/css' href='listar.css'>
";

while ($dados = mysqli_fetch_array($executar)) {
    echo "
    <table border='3'>
    <tr>
        <td>$dados[1]</td>
        <td><a href='detalhes.php?id=$dados[id_usuario]'><img src='magnifying-glass.svg'></a></td>
    </tr>
    </table>";

}
// print_r($dados);
?>