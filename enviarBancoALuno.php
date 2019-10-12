<?php 
include "cabecalho.php";
$nome = $_POST["nome"];
echo $nome;

include "ConectaBD.php";

$comandoSQL = "INSERT INTO alunoP (nome
)values ('$nome')";

mysqli_query($con, $comandoSQL)
or die("Erro na inclusão do aluno: $nome<br>" .
    mysqli_error($con) );

echo "<br>Aluno incluido com sucesso!<br>";
?>
<form action="inserirAluno.php">
    <input type="submit" value="Inserir outro aluno">
</form>
<form action="index.php">
    <input type="submit" value="voltar para Home">
</form>
