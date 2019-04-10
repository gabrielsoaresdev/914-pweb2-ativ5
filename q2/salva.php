<?php

$nick = $_POST['nick'];
$text = $_POST['texto'];

$host = "localhost";
$user = "root";
$password = "";
$database = "atividade52";
        
$conexao = mysqli_connect($host, $user, $password, $database);
$insert = "INSERT INTO mensagens (nick, texto) values ('$nick', '$text')";
mysqli_query($conexao, $insert);
header('Location: ./index.php?nick='.$nick);