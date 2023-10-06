<?php
$dbname="3lmmanagement";
$dbuser="root";
$dbpassword="";
// CONEXAO
$conn=new PDO('mysql:host=localhost;dbname='.$dbname,$dbuser,$dbpassword);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}#1
