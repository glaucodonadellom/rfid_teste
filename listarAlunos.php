<?php
include_once "cabecalho.php"
?>
<body>Lista de Alunos
<table class ="table-responsive"cellSpacing=1 cellPadding=0 width=544 border=5>
    <tbody>
    <!-- <th>Código</th> -->
    <th>data presença</th>

    <th>Nº Cartão </th>
    <th>Nº ALuno </th>
    <th>Nome Aluno </th>
    <tr>
        <td></td>
        <?php


        include "ConectaBD.php";

        $comandoSQL = "SELECT presenca.datapresenca,presenca.idAluno_fk, card.card, alunop.nome
         FROM presenca INNER JOIN alunop ON presenca.idAluno_fk = alunop.idAluno
          INNER JOIN card ON presenca.idCard_fk = card.idCard ";

        // $comandoSQL = "SELECT presenca.idPresenca,presenca.datapresenca,presenca.idCard_fk,
        // presenca.idAluno_fk,alunoP.* , card.* FROM presenca left outer join (select nome where presenca.idAluno_fk = alunoP.idAluno)
        // left outer join (select card where presenca.idCard_fk = card.idCard)"

         // $comandoSQL = "SELECT idPresenca,datapresenca,idCard_fk,idAluno_fk, nome, card
         // FROM presenca, alunoP, card WHERE presenca.idAluno_fk = alunoP.idAluno AND
         // presenca.idCard_fk = card.idCard";


//        $comandoSQL = "SELECT idPresenca,datapresenca,idCard_fk,idAluno_fk FROM presenca";

        $rs = mysqli_query($con, $comandoSQL) or die ("Erro " . mysqli_error($con));


        $linhas = mysqli_num_rows($rs);
        if ($linhas < 1) die("tabela de <b> presença</b> esta vazia! :(");

            $contador = 0;

            while ($contador < $linhas) {

                $dados = mysqli_fetch_array($rs);
                // $idPresenca = $dados['idPresenca'];
                $dataPresenca = $dados['datapresenca'];
                $idCard_fk = $dados['card'];
                $idAluno_fk = $dados['idAluno_fk'];
                $nome = $dados['nome'];


                echo"<tr>";
                // echo"<td>$idPresenca</td>";
                echo"<td>$dataPresenca</td>";
                echo"<td>$idCard_fk</td>";
                echo"<td>$idAluno_fk</td>";
                echo"<td>$nome</td>";
                $contador++;

            }
?>
    </tr>
    </tbody>
</table>
</form>
<form method="post" action="index.php">
  <input type="submit" value="Voltar"  maxlength="50">
</form>

</body>

</html>
