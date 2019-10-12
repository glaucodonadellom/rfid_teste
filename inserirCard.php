<?php
include "cabecalho.php";

?>
<form method="post" action="enviarBancoCard.php" >
  card: <br>
  <input type="text" maxlength="50"name="card">
  <br>
  <select name="idAluno_FK" >
<?php 
	include "ConectaBD.php";
	$comandoSQL = "SELECT idAluno,nome FROM alunop";
	$rs = mysqli_query($con, $comandoSQL) or die ("Erro " . mysqli_error($con));

		$linhas = mysqli_num_rows($rs);
        if ($linhas < 1) die("tabela de <b> Aluno </b> esta vazia! :( " );

            $contador = 0;

            while ($contador < $linhas) {

                $dados = mysqli_fetch_array($rs);
                $idAluno = $dados['idAluno'];
                $nome = $dados['nome'];
                ?>
                <option value="<?= $idAluno?>"><?= $nome ?></option>
                <?php
                $contador++;
            }
?>
</select>
  <hr>
  <input type="submit" value="Enviar" >
</form>
<form method="post" action="index.php">
  <input type="submit" value="Voltar"  >
</form>
</body>
</html>