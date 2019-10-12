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
    $ComandoSQL = "SELECT `idALuno_FK` FROM `card` WHERE `card`= '$card'";
    TODO:/*corrigir abaixo, incluindo a função isset para verificar se o card existe no banco*/
    if(isset( )) {
        $rs = mysqli_query($con, $comandoSQL) or die ("Erro " . mysqli_error($con));
        $ComandoSQL = "INSERT INTO presenca (datapresenca,idcard_fk)values ('$data','$card')";
    }else{
        $idaluno_fk = mysqli_fetch_array($rs);
        $ComandoSQL = "INSERT INTO presenca (datapresenca,idcard_fk,idaluno_fk)values ('$data','$card','$idaluno_fk')";

    }
    mysqli_query($con, $comandoSQL)
    or die("Erro na inclusão da presença: $card<br>" .
        mysqli_error($con) );
}
Echo "Inclusão de presença concluido com sucesso"

//se tiver "data" no arquivo //
//$data = substr($dados, 5, 16);
//$card = substr($dados, 22, 10);




//se nao tiver "data" no arquivo
//$data   = substr($dados, 0, 16);
//$card   = substr($dados, 17, 10);


?>





</body> </html>

