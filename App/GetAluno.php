<?php 


require __DIR__._DS_."Crud"._DS_."Read.php";

$read = new read;
$aluno = $read->build('alunos',"WHERE id={$_GET['id']}");
$aluno = $aluno['0'];

?>