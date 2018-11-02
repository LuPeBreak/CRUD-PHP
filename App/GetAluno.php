<?php 


require __DIR__."/Crud/Read.php";

$read = new read;
$aluno = $read->build('alunos',"WHERE id={$_GET['id']}");
$aluno = $aluno['0'];

?>