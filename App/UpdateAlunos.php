<?php 
define("_DS_", DIRECTORY_SEPARATOR);


require __DIR__._DS_."Crud"._DS_."Update.php";

$update = new Update;

$data = [
    "nome" => $_POST["nome"],
    "email" =>$_POST["email"]
];

$update->build('alunos',$data,"Where id= {$_POST["id"]}");

header("location:http://localhost/crud/");

?>