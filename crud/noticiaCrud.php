<?php

function adicionarNoticia ($conexao,$tituloNot,$escalaNot,$textoNot,$errataNot,$imgNot,$imgaltNot,$dataNot) {

  $comando = "INSERT INTO noticia (tituloNot,escalaNot,textoNot,errataNot,imgNot,imgaltNot,dataNot) values ('$tituloNot','$escalaNot','$textoNot','$errataNot','$imgNot','$imgaltNot','$dataNot')";

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


 ?>
