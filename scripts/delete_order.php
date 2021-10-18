<?php
session_start();
include_once("connection.php");
$order = $_GET['order'];
$sql = "DELETE FROM user_order WHERE id_order='$order'";
$sql_query = mysqli_query($connect, $sql);
mysqli_close();
header('location:../index.php');
