<?php
session_start();
if(isset($_POST["bt"])){
    $_SESSION["nome"] = $_POST["nome"];
    $_SESSION["texto"] = $_POST["texto"];
    header("location: ReceberMsg.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mandando informações</title>
</head>
<body>
    <center>
    <h1>Bem-Vindo</h1><hr>
    <h2>Escreva alguma Mensagem</h2>
    <form action="index.php" method="post">
    <input type="text" name="nome" placeholder="Digite seu nome">
    <input type="text" name="texto" placeholder="Texto aqui">
    <button type="submit" name="bt">Enviar Mensagem</button>
    </form>
    <p><strong>Mensagem enviada por: </strong><?php echo $_SESSION["nome"]; ?></p>
    <p><strong>Mensagem: </strong><?php echo $_SESSION["texto"]; ?></p>
    </center>
</body>
</html>