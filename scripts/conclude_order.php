<?php
session_start();
include_once("connection.php");


$order = $_GET['order'];

if (!empty($order)) {
    $sql = "SELECT * FROM user_order WHERE id_order='$order'";
    $sql_query = mysqli_query($connect, $sql);

    $result = mysqli_fetch_array($sql_query);
    $id_user = $result['id_user'];
    $id_order = $result['id_order'];
    $client_name = $result['client_name'];
    $client_order = $result['client_order'];
    $price = $result['price'];
}



$sql2 = "INSERT INTO historic_order (id_user, id_order, client_name, client_order, price) VALUES ('$id_user,'$id_order','$client_name','$client_order','$price')";

if (!empty($order)) {
    $sql_query = mysqli_query($connect, $sql2);
}


//mysqli_close();
//header('location:../index.php');
