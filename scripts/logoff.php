<?php

include "connection.php";
session_start();

// Remove dados da sessão
if (isset($_SESSION["logado"])) {
    unset($_SESSION["logado"]);
    session_destroy();
    header('location:../login.php');
}
