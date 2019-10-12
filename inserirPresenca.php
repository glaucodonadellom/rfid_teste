<?php
include "cabecalho.php";
//`idPresenca` INT PRIMARY KEY AUTO_INCREMENT,,
//`datapresenca` DATE NOT NULL,
//`idCard_fk` INT,
//`idAluno_fk` INT

// $date = $_POST["date"];
// $idcard_fk =$_POST["idcard_fk"];
// $idAluino_FK = $_POST["idAluino_FK"];
//
//
// $comandoSQL = "INSERT INTO presenca (datapreseca,idcard_fk,idAluno_FK)values ($date,$idcard_fk,$idAluino_FK )";
?>
<form method="post" action="#">
	<input type="hidden" name="MAX_FILE_SIZE" value="4194304">

	<input type="file" name="arquivo" id="arquivo">
    <hr>
    <input type="submit" value="enviar">

</form>

</form>
<form method="post" action="index.php">
  <input type="submit" value="Voltar"  maxlength="50">
</form>
