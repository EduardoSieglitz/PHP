<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recebendo informações</title>
</head>
<body>
    <center>
    <h1>Bem-Vindo</h1><hr>
    <h2>Escreva alguma Mensagem de volta</h2>
    <form action="ReceberMsg.php" method="post">
    <input type="text" name="nome" placeholder="Digite seu nome">
    <input type="text" name="texto" placeholder="Texto aqui">
    <button type="submit" name="bt">Enviar Mensagem</button>
    </form>
    <p><strong>Mensagem enviada por: </strong><?php echo $_SESSION["nome"]; ?></p>
    <p><strong>Mensagem: </strong><?php echo $_SESSION["texto"]; ?></p>
    <?php
    if(isset($_POST["bt"])){
        $_SESSION["texto"] = $_POST["texto"];
        $_SESSION["nome"] = $_POST["nome"];
        header("location: index.php");
    }
    ?>
    </center>
</body>
</html>