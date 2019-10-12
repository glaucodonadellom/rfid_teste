<?php
include "cabecalho.php";
$card = $_POST["card"];
$idAluno_FK = $_POST["idAluno_FK"];
echo "$card<br>";
echo $idAluno_FK;

include "ConectaBD.php";

$comandoSQL = "INSERT INTO card(
card,
idAluno_FK
)values (
'$card',
'$idAluno_FK'
)";

mysqli_query($con, $comandoSQL)
or die("Erro na inclusão do cartão: $card<br>" .
    mysqli_error($con) );

echo "<br>cartão incluido com sucesso!<br>";
?>
<form action="inserirCard.php">
    <input type="submit" value="Inserir outro cartão">
</form>
<form action="index.php">
    <input type="submit" value="voltar para Home">
</form>