<?php

require_once 'conexao.php';
require_once 'crud/crud.php';

$idNot = $_GET['id'];
$resultado = exibirNoticia ($conexao,$idNot);
$noticia = mysqli_fetch_assoc($resultado);

$noticia['dataNot'] = implode("/",array_reverse(explode("-",$noticia['dataNot'])));

 ?>
<head><title><?= $noticia['tituloNot']?></title></head>
<?php include 'header.php' ?>
<div class="container">

<div id="noticia">
<h1> <?= $noticia['tituloNot']?> </h1>
<article>Por André Martins - <?= $noticia['dataNot']?> </article>
<img src="images/<?= $noticia['imgNot']?>">
<p><?= $noticia['textoNot']?></p>
</div>




</div>
<?php include 'footer.php' ?>
