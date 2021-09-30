<?php

include "connection.php";
session_start();

//verificacao
if(!isset($_SESSION['logado'])):
	header('Location:../login.php');
else:
    session_destroy();
    header('location:Location:deucertinho.php');
endif;

//dados
$id = $_SESSION['id'];
$sql = "SELECT * FROM user WHERE  id = '$id'";
$resultado = mysqli_query($connect, $sql);
$dados = mysqli_fetch_array($resultado);
mysqli_close($connect);


var_dump($id)


?>