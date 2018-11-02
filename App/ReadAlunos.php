<?php 


require __DIR__._DS_."Crud"._DS_."Read.php";

$read = new read;
$alunos = $read->build('alunos');


?>