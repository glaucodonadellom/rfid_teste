<?php
include "cabecalho.php";
//
// $nome = $_POST['nome'];
//
// $comandoSQL = "INSERT INTO alunop (NOME)values ($nome)";

?>
<form method="post" action="enviarBancoALuno.php" >
  NOME: <br>
  <input type="text" maxlength="50" name="nome">
  <br>
  <hr>
  <input type="submit" maxlength="50">
</form>
<form action="index.php">
  <input type="submit" value="Voltar"  maxlength="50">
</form>
