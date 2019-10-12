<?php
$con = mysqli_connect('localhost','root','');

mysqli_select_db($con,"rfid") or
 die("erro ao conectar ao banco" . mysqli_error($con));



/*

class ConectaBD
{  var $user = 'glauco';
   var $password = 'M@G@lhaes12';
   var $database = 'rfid';
   var $hostname = 'localhost';


//comandos a ser executados
public function comandoSQL($comandoSQL)
    {

//
        $con = mysqli_connect($this->hostname,$this->user,$this->password,$this->database);
//        $conect = mysqli_select_db($con) or die('Erro: '.mysqli_error($con));
        $rs = mysqli_query($con, $comandoSQL) or die ("Erro ".mysqli_error ($con));

//    $con = mysqli_connect();

        return ($rs);
    }
}
*/
