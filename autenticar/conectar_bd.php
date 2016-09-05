<?php

 
$conexio;
function conectar_bd()
{
    global $conexio;


    $elUsr = "root";
    $elPw  = "Thomas2060*";
    $elServer ="localhost";
    $laBd = "Proyectos";
     
    //Conectar
    $conexio = mysql_connect($elServer, $elUsr , $elPw) or die (mysql_error());
     
    //Seleccionar la BD a utilizar
    mysql_select_db($laBd, $conexio ) or die (mysql_error());
}  
?>