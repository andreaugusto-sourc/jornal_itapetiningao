<?php

require_once 'conexao.php';
require_once 'crud/crud.php';

$tituloNot = $_POST['tituloNot'];
$escalaNot = $_POST['escalaNot'];
$textoNot = $_POST['textoNot'];
$paragNot = $_POST['paragNot'];
$imgaltNot = $_POST['imgaltNot'];

if (isset($_FILES["imgNot"])) {
    $imagem = $_FILES["imgNot"];

    if ($imagem['size'] > 4003269) {
        die("arquivo muito grande! Máximo de 3MB");
    }

    if($imagem['error']) {
        die("Falha ao enviar o arquivo.");
    }
    $diretorio = "images/";

    $imagemCaminho = $imagem['name'];

    $novoCaminho = uniqid();

    $extensao = strtolower(pathinfo($imagemCaminho,PATHINFO_EXTENSION));
    if ($extensao !=  "jpg" && $extensao != 'png' && $extensao != "webp" ) {
        die("Tipo de arquivo inválido!");
    }

    $alocacao = move_uploaded_file($imagem["tmp_name"], $diretorio . $novoCaminho . "." . $extensao);
    if($alocacao) {
        echo "Sucesso";
        echo "<br> <a href=\"images/$novoCaminho.$extensao\">Ver</a> ";


    }else{
        echo " Falha";
    }

}
$imgNot = $novoCaminho ."." . $extensao;

$resultado = adicionarNoticia ($conexao,$tituloNot,$escalaNot,$textoNot,$paragNot,$imgNot,$imgaltNot);

if($resultado) {
  echo "Inserção feita.<br> <a href='index.php'>Home</a> ou <a href='admin.php'>Admin</a>";
}else {
  echo "Erro na inserção!<br> <a href='index.php'>Home</a> ou <a href='admin.php'>Admin</a>";
}



 ?>