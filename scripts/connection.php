<?php
    
    //conexão banco de dados
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db_name = "webclients";

    $connect = mysqli_connect($servername,$username,$password,$db_name);

    if(mysqli_connect_error()):
            echo "falha na conexão".mysqli_connect_error();
    endif;
