  <?php
include_once "cabecalho.php";

//  $card = (int)$_POST['card'];
/*https://forum.imasters.com.br/topic/417266-resolvido%C2%A0ler-e-separar-informa%C3%A7%C3%B5es-de-arquivo-txt/*/
  $data = date('Y/m/d H:i:s');
  ?>
Data <br>
<?=  $data ?>
<br>1º
<form action="inserirAluno.php" method="post">
    <input type="submit" value="Cadastro de Aluno">
</form>
2º
<form action="inserirCard.php" method="post">
  <input type="submit" value="Cadastro de Cartão">
</form>
3º
<form action="inserirPresenca.php" method="post">
  <input type="submit" value="Inserir Presença">
</form>
4º
<form action="listarAlunos.php" method="post">
    <input type="submit" value="Listar Presença">
</form>



</body>
</html>
