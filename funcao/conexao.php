<?php
$servidor = "localhost";
$usuario = "root";
$senha = "chupeta55";
$dbname = "valeria";

$conexao = mysqli_connect($servidor,$usuario,$senha,$dbname);
if(!$conexao){
    die("Houve um problema: ".mysqli_connect_error());
}
?>