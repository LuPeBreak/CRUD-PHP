<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<form action="App/InsertAlunos.php" method="POST">
  Nome: <input type="text" name="nome"><br>
  Email: <input type="text" name="email"><br>
  <input type="submit" value="Submit">
</form>

<br>
<br>
<div>
<table>
<tr>
    <th>Nome</th>
    <th>Email</th> 
  </tr>
<?php
      define("_DS_", DIRECTORY_SEPARATOR);
      require __DIR__._DS_."App"._DS_."ReadAlunos.php";

      foreach($alunos as $aluno){
        echo "<tr>";
        echo "<td>{$aluno['nome']}</td>";
        echo "<td>{$aluno['email']}</td>";
        echo "<td><a href='App/DeleteAlunos.php?id={$aluno['id']}'>Delete</a>/<a href='UpdatePage.php?id={$aluno['id']}'>Update</a></td>";
        echo "</tr>";
      }
    ?>
</table>
   
</div>
</body>
</html>