<?php 
session_start();
$_SESSION['id'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Produto</title>
    <link rel="stylesheet" href="./Css/styleEdita.css">
</head>
<body align="center">
<div class="Conteiner">
    <form action="./FormEdita.php" method="post">
        <table border="1" align="center" style="border: 1px dashed black">
            <tr>
                <th align="center" colspan="2" style="font-size: 30px;">Armário</th>
            </tr>
            <tr>
            <tr>
                <th>Nome de Usuario</th>
                <td><input type="text" name="nome"></td>
            </tr>
            <tr>
                <th>login</th>
                <td><input type="text" name="login"></td>
            </tr>
            <tr>
                <th>Senha</th>
                <td><input type="text" name="senha"></td>
            </tr>
            <tr>
                <th>Nivel de Usuario</th>
                <td><select name="tipo">
                <option value="A">Usuario</option>
                <option value="B">Adm</option>
                <option value="C">Gerente</option>
                </select></td>
            </tr>
            <tr>
                <td align="center" colspan="2"><input type="submit" name="btnExec" value="Cadastrar"></input></td>
            </tr>
        </table>
    </form>
    <?php
    if(isset($_POST["btnExec"])){
      $conn = new PDO ("mysql:local=localhost;dbname=cadastro_usuario;port=3306", "root", "");
      $dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);
      var_dump($dados);
      $sql = "UPDATE usuarios SET nome = :nome, login = :login, senha = :senha, tipo = :tipo WHERE id_usuario = :id";
      $add = $conn->prepare($sql);
      $add->bindParam(":id", $_SESSION['id']);
      $add ->bindParam(":nome", $dados["nome"]);
      $add ->bindParam(":login", $dados["login"]);
      $add ->bindParam(":senha", $dados["senha"]);
      $add ->bindParam(":tipo", $dados["tipo"]);
      $add->execute();
      header("Location: Tabela.php");
    }
?>
 <a href="Home.html">Home</a>
</div>
</body>
</html>