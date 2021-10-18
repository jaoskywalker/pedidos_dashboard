<?php
session_start();
include("connection.php");


$id_user = $_GET['id_user'];
$id_order = $_GET['id_order'];
$client_name = $_GET['client_name'];
$client_order = $_GET['client_order'];
$price = $_GET['price'];

$sql = "INSERT INTO historic_order (id_user, id_order, client_name, client_order, price) VALUES ('$id_user','$id_order','$client_name','$client_order','$price')";
$insert_ht = mysqli_query($connect, $sql);

$insert = mysqli_insert_id($connect);

if (!$insert = null) :
    header("Location:delete_order.php?order=$id_order");
endif;
