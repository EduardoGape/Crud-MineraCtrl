<?php
    switch($_REQUEST["action"]){
        case 'cadastrar':
            $username = $_POST["username"];
            $email = $_POST["email"];
            $ctrlcash = $_POST["ctrlcash"];
            $password = md5($_POST["password"]);
            $data_nasc = $_POST["data"];


            $sql = "INSERT INTO alunos (username, email,  ctrlcash, password, data_nasc, code) VALUES ('{$username}', '{$email}', '{$ctrlcash}', '{$password}', '{$data_nasc}', '0809')";
            $res = $conn -> query($sql);
            
            if($res){
                print "<script>alert('Cadastro com sucesso');</script>";
                print "<script>location.href='?page=listar';</script>";
            }else{
                print "<stript>alert('Não foi possivel cadastrar');</stript>";
                print "<script>location.href='page=listar';</script>";
            }
            break;
        
        case 'editar':
            $username = $_POST["username"];
            $email = $_POST["email"];
            $ctrlcash = $_POST["ctrlcash"];
            $password = md5($_POST["password"]);
            $data_nasc = $_POST["data"];

            $sql = "UPDATE alunos SET 
                        username='$username',
                        email = '$email',
                        ctrlcash = '$ctrlcash',
                        password = '$password',
                        data_nasc = '$data_nasc'
                    WHERE
                        id=".$_REQUEST["id"];

            $res = $conn -> query($sql);
            
            if($res){
                print "<script>alert('Editado com sucesso');</script>";
                print "<script>location.href='?page=listar';</script>";
            }else{
                print "<stript>alert('Não foi possivel editar');</stript>";
                print "<script>location.href='page=listar';</script>";
            }
            break;
        
        case 'excluir':
            $sql = "DELETE FROM alunos WHERE id=".$_REQUEST["id"];
            $res = $conn -> query($sql);
            
            if($res){
                print "<script>alert('Excluido com sucesso');</script>";
                print "<script>location.href='?page=listar';</script>";
            }else{
                print "<stript>alert('Não foi possivel excluir');</stript>";
                print "<script>location.href='page=listar';</script>";
            }
            break;
            break;

    }
?>