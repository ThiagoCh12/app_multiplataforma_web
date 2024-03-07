<?php
    include 'conecta.php';
    $pessoa = mysqli_query($conn, "SELECT * FROM pessoa");
    $row = mysqli_num_rows($pessoa);
    if($row > 0){
        echo "<table class='table table-dark table-striped'>";
        echo "<thead>";
        echo "<tr>";
        echo "<th>ID</th>";
        echo "<th>NOME</th>";
        echo "<th>IDADE</th>";
        echo "<th>CIDADE</th>";
        echo "<th>AÇÃOES</th>";
        echo "</tr>";
        echo "</thead>";
        echo "<tbody>";
        while($registro = $pessoa->fetch_array()){
            $id = $registro['id'];
            echo '<tr>';
            echo '<td>'.$registro['id'].'</td>';
            echo '<td>'.$registro['nome'].'</td>';
            echo '<td>'.$registro['idade'].'</td>';
            echo '<td>'.$registro['cidade'].'</td>';
            echo '<td><a href="editar.php?id='.$id.'"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="blue" class="bi bi-pencil-square" viewBox="0 0 16 16">
            <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
            <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
          </svg></a> | <a href="excluir.php?id='.$id.'"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="red" class="bi bi-trash" viewBox="0 0 16 16">
          <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z"/>
          <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z"/>
        </svg></a></td>';
            echo '</tr>';
        }
        echo '</tbody>';
        echo '</table>';
        echo 'Total de registros: '.$row;
    }else{
        echo "<center><svg xmlns='http://www.w3.org/2000/svg' width='50' height='50' fill='black' class='bi bi-cloud-slash-fill' viewBox='0 0 16 16'>
        <path fill-rule='evenodd' d='M3.112 5.112a3 3 0 0 0-.17.613C1.266 6.095 0 7.555 0 9.318 0 11.366 1.708 13 3.781 13H11zm11.372 7.372L4.937 2.937A5.5 5.5 0 0 1 8 2c2.69 0 4.923 2 5.166 4.579C14.758 6.804 16 8.137 16 9.773a3.2 3.2 0 0 1-1.516 2.711m-.838 1.87-12-12 .708-.708 12 12z'/>
      </svg></center>";
        echo "<br></br>";
        echo "<center><h2><b>Não existem pessoas cadastradas<b></h2></center>";
    }
?>