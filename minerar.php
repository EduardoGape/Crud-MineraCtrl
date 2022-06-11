<h1>Listar Usuarios</h1>

<?php
    $sql = "SELECT * FROM alunos";
    $res = $conn -> query($sql);
    $qtd = $res ->num_rows;

    if($qtd>0){
        print "<table class='table table-houver table-striped table-bordered'>";
        print "<tr>";
        print "<th>#ID</th>";
        print "<th>Nome</th>";
        print "<th>CtrlCash</th>";
        print "<th>Ações</th>";
        print "</tr>";
        while($row = $res->fetch_object()){
            print "<tr>";
            print "<td>".$row->id."</td>";
            print "<td>".$row->username."</td>";
            print "<td>".$row->ctrlcash."</td>";
            print "<td><button onclick= \"location.href='?page=soma-aula&id=".$row->id."';\" class='btn btn-success'>Minerar</button></td>";
            print "</td>";
        }
        print "</table>";
    }else{
        print "<p class='alert alert-danger'>Não encontrou resultados!</p>";
    }

?>