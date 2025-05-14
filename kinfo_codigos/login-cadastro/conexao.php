<?php
$dbHost = 'localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'mydb';

$conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

/*if($conexao->connect_errno){
    echo "Erro";    
} else{
    echo"Conexão bem sucedida";
}*/

function cripto($senha) {
    $c='';

    for($pos=0; $pos < strlen($senha); $pos++){
        $letra = ord($senha[$pos])+1;
        $c .=chr($letra);         
    }
    return $c;
}
?>  