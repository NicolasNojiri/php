<?php
include("conexao.php");

$genero = $_POST['genero'];

$sql = "delete from generos where genero = $genero";

if($conn->query($sql)){
    echo "registro excluido com sucesso";
}else{
    echo "erro: ".$conn->error;
}
$conn->close();
?>