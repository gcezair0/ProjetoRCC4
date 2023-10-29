<?php
$host = "127.0.0.1";
$user = "root";
$senha = "";
$db = "Revoshop";

$conn = mysqli_connect($host, $user, $senha, $db) or die("<h1>Nao foi possivel se conectar ao banco de dados.</h1>");

function generateHash($length = 32){
    $characters = "1234567890qwertyuiopasdfghjklzxcvbnmQWERTYUIOPASDFGHJKLZXCVBNM";
    $charactersLength = strlen($characters);
    $hashString = '';
    for($i = 0; $i < $length; $i++){
        $hashString .= $characters[rand(0,$charactersLength -1)];
    }
    return $hashString;
}

?>