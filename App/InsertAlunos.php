<?php 
define("_DS_", DIRECTORY_SEPARATOR);


require __DIR__._DS_."Crud"._DS_."insert.php";

$insert = new insert;

$data = [
    "nome" => $_POST["nome"],
    "email" =>$_POST["email"]
];

$insert->build('alunos',$data);

header("location:http://localhost:8001");

?>