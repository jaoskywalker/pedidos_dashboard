<?php

include "connection.php";
session_start();

//verificacao
if (!isset($_SESSION['logado'])) :

    header('Location: ../login.php');
endif;

//dados
$id = $_SESSION['id'];
$sql = "SELECT * FROM user WHERE  id = '$id'";
$resultado = mysqli_query($connect, $sql);
$dados = mysqli_fetch_array($resultado);

$id_user = $id;
$client_name = $_POST['client_name'];
$client_order = $_POST['client_order'];
$price = number_format($_POST['price'], 2);
money

$sql = "INSERT INTO user_order (id_user, client_name, client_order, price) 
        VALUES               ('$id_user','$client_name','$client_order','$price' )";


if (!mysqli_query($connect, $sql)) {
    echo "Error: " . $sql . "<br>" . mysqli_error($connect);
    exit;
}
mysqli_close($connect);

header('location:../index.php');
