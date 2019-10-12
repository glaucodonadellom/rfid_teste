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
    $comandoSQL = "SELECT `idCard`,`idALuno_FK` FROM `card` WHERE `card`=$card";
    $rs = mysqli_query($con, $comandoSQL) or die ("Erro " . mysqli_error($con));
    $linhas = mysqli_num_rows($rs);
//    $dado = mysqli_fetch_array($rs);

    if ($linhas < 1) {
        echo "SEM ID";
        $comandoSQL = "INSERT INTO card(card,idAluno_FK)values ('$card','1')";
        mysqli_query($con, $comandoSQL)
        or die("Erro na inclusão do cartão: $card<br>" .
            mysqli_error($con) );
        sleep ( 5 );
        $comandoSQL = "SELECT `idCard`,`idALuno_FK` FROM `card` WHERE `card`=$card";

        $rs = mysqli_query($con, $comandoSQL)
        or die("Erro na inclusão do cartão: $card<br>" .
            mysqli_error($con) );

        }
    var_dump($rs);
    $dado = mysqli_fetch_array($rs);
    $idAluno_fk = $dado['idALuno_FK'];
    $idCard_fk = $dado['idCard'];
    var_dump($idAluno_fk);
    var_dump($idCard_fk);
    $comandoSQL = "INSERT INTO presenca (`datapresenca`,`idCard_fk`,`idAluno_fk`)values ('$data','$idCard_fk','$idAluno_fk');";
    echo "COM ID ALUNO";

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

