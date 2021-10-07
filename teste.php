<?php
                    if (mysqli_connect_error()) :
                        echo "falha na conexÃ£o " . mysqli_connect_error();
                    else :
                    endif;
                    $listar = "
                    SELECT * FROM clientes
                    INNER JOIN endereco
                    ON clientes.ID_CLIENTE = endereco.ID_CLIENTE
                    INNER JOIN  medidas
                    ON clientes.ID_CLIENTE = medidas.ID_CLIENTE
                    ";

                    $query = mysqli_query($connect, $listar);


                    while ($linha = mysqli_fetch_array($query)) {
                        var_dump($linha)
                    }
                    mysqli_close($connect);


                    echo "</table><br><br>"
?>