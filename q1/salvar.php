<?php

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];

if(strlen($senha) > 6) {
    echo "ERRO! A senha digitada é muito curta!";
    die();
}
else {
    $senha = md5($senha);


    $host = "localhost";
    $user = "root";
    $password = "";
    $database = "atividade51";

    $conexao = mysqli_connect($host, $user, $password, $database);

    $query = "INSERT INTO usuario (nome, email, senha) values ('$nome', '$email', '$senha')";
    $result = mysqli_query($conexao, $query);

    if($result) {
        echo "O cadastro foi efetuado com êxito!";
    }
    else {
        echo "ERRO! Talvez um dos dados informados já existe.";
    }

}