<?php 

require __DIR__."/../Config.php";
require __DIR__."/Crud/Update.php";

$update = new Update;

$data = [
    "nome" => $_POST["nome"],
    "email" =>$_POST["email"]
];

$update->build('alunos',$data,"Where id= {$_POST["id"]}");


header("location:http://$host:$port");


?>