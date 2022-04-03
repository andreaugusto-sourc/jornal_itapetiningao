<?php

require_once 'crud/crud.php';
require_once 'conexao.php';

$resultado = exibirNoticias ($conexao);

?>

<?php include 'header.php' ?>

<div class="container">

<div class="coluna">
    <?php while($noticia = mysqli_fetch_assoc($resultado)) : ?>

        <div class="dashboard">

            <p><?= $noticia['tituloNot']?></p>
            <a href="noticia.php?id=<?= $noticia['idNot']?>"><img src="images/<?= $noticia['imgNot']?>"</a>
            <a><?= $noticia['dataNot']?></a>
            <a href="editarNoticia.php?id=<?= $noticia['idNot']?>">Editar</a>
            <a href="deletarNoticia.php?id=<?= $noticia['idNot']?>">Deletar</a>

        </div>


    <?php endwhile ?>

</div>



</div>


<?php include 'footer.php' ?>