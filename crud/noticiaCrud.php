<?php

function adicionarNoticia ($conexao,$tituloNot,$escalaNot,$textoNot,$imgNot,$imgaltNot,$dataNot) {

  $comando = "INSERT INTO noticia (tituloNot,escalaNot,textoNot,imgNot,imgaltNot,dataNot) values ('$tituloNot','$escalaNot','$textoNot','$imgNot','$imgaltNot','$dataNot')";

  $resultado = mysqli_query($conexao,$comando);
  return $resultado;

}

function deletarNoticia ($conexao,$idNot) {

  $comando = "DELETE FROM noticia where idNot = '$idNot'";

  $resultado = mysqli_query($conexao,$comando);
  return $resultado;

}

function exibirNoticia ($conexao,$idNot) {

  $comando = "SELECT * FROM noticia where idNot = '$idNot'";

  $resultado = mysqli_query($conexao,$comando);
  return $resultado;

}

function exibirNoticias ($conexao) {

  $comando = "SELECT * FROM noticia";

  $resultado = mysqli_query($conexao,$comando);
  return $resultado;

}

function atualizarNoticia ($conexao,$idNot,$novoTitulo,$novaEscala,$novoTexto,$errataNot,$novaImg,$novoAlt) {

  $comando = "UPDATE noticia SET tituloNot = '$novoTitulo', escalaNot = '$novaEscala', textoNot = '$novoTexto', errataNot = '$errataNot', imgNot = '$novaImg', imgaltNot = '$novoAlt' where idNot = '$idNot'  ";

  $resultado = mysqli_query($conexao,$comando);
  return $resultado;
  
}


 ?>
