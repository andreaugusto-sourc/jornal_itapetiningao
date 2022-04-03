<?php

require_once 'conexao.php';
require_once 'crud/crud.php';

$idNot = $_GET['id'];

$resultado = deletarNoticia($conexao,$idNot);


if ($resultado) {
    echo "Notícia deletada.<br> <a href='index.php'>Home</a> ou <a href='admin.php'>Admin</a>";
}else{
    echo "Notícia não deletada!<br> <a href='index.php'>Home</a> ou <a href='admin.php'>Admin</a>";
}

 ?>
