<?php

include("Usuarios.class.php");

$meuusuario = new Usuarios("234.403.203-40","Nicolas Nojiri","7654321");

echo $meuusuario->mostrardetalhesu()."<br>";
$meuusuario->setcpf("323.213.815-40");
$meuusuario->setnome("Vinicius Mendes");
$meuusuario->setsenha("1234567");


echo "<br>".$meuusuario->mostrardetalhesu()."<br>";





?>

<?php


include("Filmes.class.php");

$meufilme = new Filmes("Buzz Lightyear","Drama","2023");

echo "<br>" .$meufilme->mostrardetalhes()."<br>";
$meufilme->setTitulo("Kung Fu Panda 3");
$meufilme->setGenero("Açao");
$meufilme->setAno("2022");


echo "<br>".$meufilme->mostrardetalhes();





?>
<?php

include("generos.class.php");

$meugenero = new Generos("Comedia","1","1");

echo"<br>"."<br>" .$meugenero->mostrardetalhesg()."<br>";
$meugenero->setDescricao("Romance");
$meugenero->setidGenero("2");
$meugenero->setStatus("0");


echo "<br>".$meugenero->mostrardetalhesg();





?>