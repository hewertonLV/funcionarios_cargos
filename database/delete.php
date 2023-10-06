<?php
require_once 'conexao.php';

$temp = explode('?',$_SERVER['REQUEST_URI'])[1];
$verifyCondicional = explode('=',$temp)[0];

if($verifyCondicional=='idStaff') {
  $id = explode('=',$_SERVER['REQUEST_URI'])[1];
  $sql = "DELETE FROM staffs WHERE id={$id}";
  $stmt= $conn->query($sql);
  $_SESSION['mensagem'] = "Registro apagado com sucesso!";
  header('Location: ' . $_SERVER['HTTP_REFERER']);
//  header("Location: ../resources/views/index.php");
}
if($verifyCondicional=='idCargos') {
  $id = explode('=',$_SERVER['REQUEST_URI'])[1];
  $sql = "DELETE FROM cargos WHERE id={$id}";
  $stmt= $conn->query($sql);
  $_SESSION['mensagem'] = "Registro apagado com sucesso!";
  header('Location: ' . $_SERVER['HTTP_REFERER']);
//  header("Location: ../resources/views/index.php");
}
?>

