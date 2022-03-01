<?php include 'header.php' ?>

<div class="container">

<form method="POST" action="salvarNoticia.php" enctype="multipart/form-data">

<div class="form">
<label for="tituloNot">Título da notícia</label>
<input placeholder="Ex: Putin se encontra com Bolsonaro para discutir situação ucraniana" type="text" id="tituloNot" name="tituloNot">

<label for="escalaNot">Escala da notícia</label>
<input placeholder="Ex: Regional, Internacional ..." type="text" id="escalaNot" name="escalaNot">

<label for="textoNot">Texto da notícia</label>
<textarea spellcheck="true" id="textoNot" name="textoNot" rows="15" cols="80"> </textarea>

<label for="imgNot">Imagem ilustrativa</label>
<input type="file" id="imgNot" name="imgNot">

<label for="imgaltNot">Descrição da imagem</label>
<input placeholder="Ex: Bolsonaro na praia com apoiadores" type="text" id="imgaltNot" name="imgaltNot">

<input type="submit" value="Publicar" id="botao">


</form>

</div>

</div>

<?php include 'footer.php' ?>
