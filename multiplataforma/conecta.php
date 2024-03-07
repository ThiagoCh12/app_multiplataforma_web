<?php
    $conn = mysqli_connect("sql.freedb.tech", "freedb_thiago2024", "PG#cqyVUy9ks2q%", "freedb_thmulti2024");
    mysqli_set_charset($conn, "utf8");
    if(!$conn){
        echo "Erro: ".mysqli_connect_error().PHP_EOL;
    }
?>