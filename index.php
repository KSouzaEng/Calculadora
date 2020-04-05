<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <link rel="icon" type="imagem/png" href="img/favicon.ico" />
</head>
<body class="corpo">
<div class="container w-100 p-3"><br>
<div class="resultado">
<?php
require 'Funcoes.php';
if (isset($_GET["cal"])){
    $result = $_GET["cal"];
    echo "<H1 style= margin-top:20px;>$result</H1>";
}
?>
</div>
<form action="Funcoes.php"  class="form-group " method="post">
    <label for="numero1 font-weight-bold" class="font-weight-bold mb-2">Informe um número:</label>
    <input type="text" class="form-control" name="numero1">
    <label for="numero2" class="font-weight-bold mb-2">Informe outro número</label>
    <input type="text" class="form-control" name="numero2"><br>
    <button type="submit" class="btn btn-primary" value="somar" name="somar">Adição</button>
    <button type="submit" class="btn btn-success" value="sub" name="sub">Subtração</button>
    <button type="submit" class="btn btn-danger" value="mult" name="mult">Multiplicação</button>
    <button type="submit" class="btn btn-dark" value="div" name="div">Divisão</button>
</div>
</form>
</body>
</html>
