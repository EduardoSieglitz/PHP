<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="Css/styleCadastro.css">
</head>
<body>
  <div class="Conteiner">
    <form action="./FormCadastro.php" method="post">
        <table align="center">
            <tr>
                <th colspan="2">Login</th>
            </tr>
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
        <div class="Link">
            <div class="Left">
                <a href="./Home.html">Voltar?</a>
            </div>
            <div class="Right">
                <a href="./Tabela.php">Ver tabela?</a>
            </div>
        </div>
    </form>
    <?php
    if(isset($_POST["btnExec"])){
        $conn = new PDO ("mysql:local=localhost;dbname=cadastro_usuario;port=3306", "root", "");
      $dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);
      $sql = "INSERT INTO usuarios (nome, login, senha, tipo) VALUE (:nome, :login, :senha, :tipo);";
      $add = $conn->prepare($sql);
      $add ->bindParam(":nome", $dados["nome"]);
      $add ->bindParam(":login", $dados["login"]);
      $add ->bindParam(":senha", $dados["senha"]);
      $add ->bindParam(":tipo", $dados["tipo"]);
      $add->execute();
    }
?>
</div>
</body>
</html>