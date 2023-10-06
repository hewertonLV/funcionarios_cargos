<?php
session_start();
    require_once 'conexao.php';

    if(isset($_POST['cadastrarCargo'])) {
        $name = $_POST['name'];
        $description = $_POST['description'];
        $sql = "INSERT INTO cargos (name, description) VALUES ('$name','$description')";
        $conn->query($sql);
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    } elseif(isset($_POST['cadastrarStaff'])) {
        $name = $_POST['name'];
        $lastname = $_POST['lastname'];
        $id_position = $_POST['id_position'];
        $birthday = $_POST['birthday'];
        $wage = $_POST['wage'];
        $sql = "INSERT INTO staffs (name, lastname, id_position, birthday, wage ) VALUES ('$name','$lastname','$id_position','$birthday','$wage')";
        $conn->query($sql);
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }
    exit();
?>
