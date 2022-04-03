<?php
require_once 'conexao.php';
require_once 'crud/crud.php';

$idNot = $_POST['idNot'];
echo $idNot;

$novoTitulo = $_POST['novoTitulo'];
echo $novoTitulo;

$novaEscala = $_POST['novaEscala'];
echo $novaEscala;

$novoTexto = $_POST['novoTexto'];
echo $novoTexto;

$novoAlt = $_POST['novoAlt'];
echo $novoAlt;

$errataNot = $_POST['errataNot'];
echo $errataNot;

if (isset($_FILES["novaImg"])) {
    $imagem = $_FILES["novaImg"];

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
    if ($extensao !=  "jpg" && $extensao != 'png' && $extensao != 'webp' ) {
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
$novaImg = $novoCaminho . "." . $extensao ;

$resultado = atualizarNoticia($conexao,$idNot,$novoTitulo,$novaEscala,$novoTexto,$errataNot,$novaImg,$novoAlt); 

if($resultado) {
    echo "Atualização feita.<br> <a href='index.php'>Home</a> ou <a href='admin.php'>Admin</a>";
  }else {
    echo "Erro na Atualização!<br> <a href='index.php'>Home</a> ou <a href='admin.php'>Admin</a>";
  }
 ?>
