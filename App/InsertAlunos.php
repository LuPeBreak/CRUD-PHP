<?php 

require __DIR__."/../Config.php";
require __DIR__."/Crud/insert.php";

$insert = new insert;

$data = [
    "nome" => $_POST["nome"],
    "email" =>$_POST["email"]
];

$insert->build('alunos',$data);


header("location:http://$host:$port");

?>