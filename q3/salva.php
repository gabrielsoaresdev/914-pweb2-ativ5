<?php
//sudo chown username:daemon path_projeto -R
//sudo chmod 775 path_projeto -R

$destino = 'imagens/' . $_FILES['arquivo']['name'];
$arquivo_tmp = $_FILES['arquivo']['tmp_name'];
move_uploaded_file($arquivo_tmp, $destino);

header('Location: ./index.php');