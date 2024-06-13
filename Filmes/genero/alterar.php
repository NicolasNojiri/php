<?php
include("conexao.php");

$status = $_POST['status'];
$descricao = $_POST['descricao'];
$genero = $_POST['genero'];


$sql = "update generos
            set descricao = '$descricao',
            status = '$status'
        where genero = $genero";

if($conn->query($sql)){
    header("Location: index.php?resposta=5");
    $conn->close();
    die();
}else{
    header("Location: index.php?resposta=6");
    $conn->close();
    die();
}
$conn->close();
?>