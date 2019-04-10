<?php

$host = "localhost";
$user = "root";
$password = "";
$database = "atividade51";
        
$conexao = mysqli_connect($host, $user, $password, $database);

$email = $_POST['email'];
$senha = $_POST['senha'];

$query = "SELECT * FROM usuario WHERE email='$email'";
$result = mysqli_fetch_assoc(mysqli_query($conexao, $query));

if($email <> $result['email']) {
    echo "NÃO EXISTE!";
}
else {
    if ($result['senha'] == md5($senha)) {
        echo $result['nome'] . " está logado no sistema!";
    } else {
        echo "SENHA INCORRETA!";
    }
}
