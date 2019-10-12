<?php
$ex = file_get_contents("teste.txt"); // le o arquivo
//echo $ex; // exibe o arquivo



$arrayDoTxt = [];//array inicializado

$arrayDoTxt=($data   = substr($dados, 0, 16));
$arrayDoTxt=($card   = substr($dados, 17, 10));

var_dump($arrayDoTxt);
exit();
//$arrayDoTxt = explode(" ",$ex);

foreach($arrayDoTxt as $cont){
    echo "</br>";
    echo $cont;

}