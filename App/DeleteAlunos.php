<?php 

require __DIR__."/../Config.php";
require __DIR__."/Crud/Delete.php";


$delete = new Delete;
$alunos = $delete->build('alunos',"where id={$_GET['id']}");


header("location:http://$root");


?>