<?php include 'header.php' ?>

<div class="container">

<form method="POST" action="salvarNoticia.php" enctype="multipart/form-data">

<div class="form">

<label for="tituloNot">Título da notícia</label>
<input type="text" id="tituloNot" name="tituloNot">

<label for="escalaNot">Escala da notícia</label>
<input type="text" id="escalaNot" name="escalaNot">

<label for="textoNot">Texto da notícia</label>
<textarea spellcheck="true" id="textoNot" name="textoNot" rows="15" cols="80"> </textarea>

<label for="paragNot">Número de paragráfos</label>
<input type="number" id="paragNot" name="paragNot">

<label for="imgNot">Imagem ilustrativa</label>
<input type="file" id="imgNot" name="imgNot">

<label for="imgaltNot">Descrição da imagem</label>
<input type="text" id="imgaltNot" name="imgaltNot">

<input type="submit" value="Publicar" id="botao">

</div>

</form>

</div>

<?php include 'footer.php' ?>