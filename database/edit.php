<?php
  require_once 'conexao.php';

if(isset($_POST['editarStaff'])) {
   $id = $_POST['id'];
   $name = $_POST['name'];

  $lastname = $_POST['lastname'];
  $id_position = $_POST['id_position'];
  $birthday = $_POST['birthday'];
  $wage = $_POST['wage'];
  $sql = "UPDATE staffs SET name=?, lastname=?, id_position=?, birthday=?, wage=? WHERE id=?";
  $stmt= $conn->prepare($sql);
  $stmt->execute([$name, $lastname, $id_position, $birthday,$wage,$id]);
  $_SERVER['HTTP_REFERER'];
  header("Location: ../resources/views/index.php");
  exit();
//  header('Location: ' . $_SERVER['HTTP_REFERER']);
}
if(isset($_POST['editarCargos'])) {
  $id = $_POST['id'];
  $name = $_POST['name'];
  $description = $_POST['description'];
  $sql = "UPDATE cargos SET name=?, description=? WHERE id=?";
  $stmt= $conn->prepare($sql);
  $stmt->execute([$name, $description,$id]);

  header("Location: ../resources/views/index.php");
    exit();
//  header('Location: ' . $_SERVER['HTTP_REFERER']);
}