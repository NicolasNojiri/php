<?php
include("conexao.php");

$descricao = $_POST['descricao'];
$status = $_POST['status'];


$sql = "insert into generos (descricao, status) values ('$descricao',$status)";

if($conn->query($sql)){
    echo "registro de gênero incluido com sucesso";
}else{
    echo "erro: ".$conn->error;
}
$conn->close();
?>