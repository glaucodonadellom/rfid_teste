<?php
include "cabecalho.php";
include "ConectaBD.php";

$nome_temporario=$_FILES["Arquivo"]["tmp_name"];

$dados = file($nome_temporario);


foreach ($dados as $linha){
    $linha= trim($linha);
    $data = substr($linha, 5, 16);
    $card = substr($linha, 22, 15);
    echo $data;
    echo"<br>";
    echo $card;
    echo"<br>";
    $comandoSQL = "SELECT `idALuno_FK` FROM `card` WHERE 'card= $card'";

    $rs = mysqli_query($con, $comandoSQL) or die ("Erro " . mysqli_error($con));
    $linhas = mysqli_num_rows($rs);

    if ($linhas < 1) {
        $comandoSQL = "INSERT INTO card(
        card,
        idAluno_FK
        )values (
        '$card',
        '1'
        )";
        mysqli_query($con, $comandoSQL)
        or die("Erro na inclusão do cartão: $card<br>" .
            mysqli_error($con) );

        $comandoSQL = "INSERT INTO presenca (datapresenca,idcard_fk,idAluno_fk)values ('$data','$card','1')";
        echo "SEM ID ALUNO";
        var_dump($card);
        var_dump($comandoSQL);

    }else{
        $dado = mysqli_fetch_array($rs);
        $idAluno_fk = $dado['idALuno_FK'];
        var_dump($card);
        $comandoSQL = "INSERT INTO presenca (idPresenca,datapresenca,idCard_fk,idAluno_fk)values ('0','$data','$card','$idAluno_fk');";
        echo "COM ID ALUNO";
        var_dump($comandoSQL);
    }
    var_dump($comandoSQL);
    mysqli_query($con, $comandoSQL)
    or die("Erro na inclusão da presença: $card<br>" .
        mysqli_error($con) );
}
echo "Inclusão de presença concluido com sucesso"

//se tiver "data" no arquivo //
//$data = substr($dados, 5, 16);
//$card = substr($dados, 22, 10);




//se nao tiver "data" no arquivo
//$data   = substr($dados, 0, 16);
//$card   = substr($dados, 17, 10);


?>





</body> </html>

