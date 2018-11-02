<?php 

define("_DS_", DIRECTORY_SEPARATOR);
require __DIR__._DS_."Crud"._DS_."Delete.php";

$delete = new Delete;
$alunos = $delete->build('alunos',"where id={$_GET['id']}");

header("location:http://localhost/crud/");
?>