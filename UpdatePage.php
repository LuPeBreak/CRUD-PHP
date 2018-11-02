<!DOCTYPE html>
<html>
<head>
    <?php 
    define("_DS_", DIRECTORY_SEPARATOR);
    require __DIR__._DS_."App"._DS_."GetAluno.php";
    ?>
    <meta charset="utf-8" />
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<form action="app\UpdateAlunos" method="POST">
<input type="hidden" name="id"  value="<?php echo "{$aluno['id']}"?>" readonly><br>
  Nome: <input type="text" value="<?php echo "{$aluno['nome']}"?>" name="nome"><br>
  Email: <input type="text" value= "<?php echo "{$aluno['email']}"?>" name="email"><br>
  <input type="submit" value="Submit">
</form>
   
</div>
</body>
</html>