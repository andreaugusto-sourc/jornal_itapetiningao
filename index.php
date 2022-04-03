<?php

require_once 'crud/crud.php';
require_once 'conexao.php';

$resultado = exibirNoticias($conexao);

?>

<?php include 'header.php' ?>

<div class="container">

<div class="coluna">

  <?php while($noticia = mysqli_fetch_assoc($resultado)) : ?>

  <div class="caixa-noticias">

    <a href="noticia.php?id=<?= $noticia['idNot']?>"><img class="img-noticia" src="images/<?= $noticia['imgNot']?>" alt="<?= $noticia['imgaltNot']?>"></a>
    <a href="noticia.php?id=<?= $noticia['idNot']?>"><h1><?= $noticia['tituloNot']?></h1></a>

  </div>


  <?php endwhile ?>


</div>



</div>

<?php include 'footer.php' ?>
