<?php

require_once 'conexao.php';
require_once 'crud/crud.php';

$idNot = $_GET['id'];
$resultado = exibirNoticia($conexao,$idNot);

$noticia = mysqli_fetch_assoc($resultado);

include 'header.php'?>

<div class="container">

<form method="POST" action="atualizarNoticia.php" enctype="multipart/form-data">

    <div class="form">

    <input type="hidden" value="<?= $noticia['idNot']?>" name="idNot">

    <label for="tituloNot">Título da notícia</label>
    <input value="<?= $noticia['tituloNot']?>" type="text" name="novoTitulo">

    <label for="escalaNot">Escala da notícia</label>
    <input value="<?= $noticia['escalaNot']?>" type="text" name="novaEscala">

    <label for="textoNot">Texto da notícia</label>
    <input spellcheck="true" value="<?= $noticia['textoNot']?>" name="novoTexto">

    <label for="imgNot">Imagem ilustrativa</label>
    <input type="file" value="<?= $noticia['imgNot']?>" name="novaImg">

    <label for="imgaltNot">Descrição da imagem</label>
    <input type="text" value="<?= $noticia['imgaltNot']?>" name="novoAlt">

    <label for="imgaltNot">Errata</label>
    <input type="text" value="<?= $noticia['imgaltNot']?>" name="errataNot">

    <input type="submit" value="Atualizar" id="botao">


</form>

</div>

<? include 'footer.php' ?>
