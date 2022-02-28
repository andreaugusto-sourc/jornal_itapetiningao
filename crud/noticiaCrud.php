<?php

function adicionarNoticia ($conexao,$tituloNot,$escalaNot,$textoNot,$paragNot,$imgNot,$imgaltNot) {

  $comando = "INSERT INTO noticia (tituloNot,escalaNot,textoNot,paragNot,imgNot,imgaltNot) values ('$tituloNot','$escalaNot','$textoNot','$paragNot','$imgNot','$imgaltNot')";

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