<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="Css/styleLogar.css">
</head>
<body>
<?php 
        $conn = new PDO ("mysql:local=localhost;dbname=cadastro_usuario;port=3306", "root", "");
        $dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);
        if(!empty($dados)){
            $sql = "SELECT * FROM usuarios WHERE login = :login and senha = :senha;";
            $consulta = $conn->prepare($sql);
            $consulta->bindParam(':login', $dados['login']);
            $consulta->bindParam(':senha', $dados['senha']);
            $consulta->execute();
            if($row = $consulta->fetch()){ 
                    header("Location: Site.php");
            }else{
            echo ("<center><br><h1>Login ou senha está errado</h1></center>");
            }
        }
    ?>
<div class="Conteiner">
    <form action="./login.php" method="post">
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
                <td align="center" colspan="2"><button type="submit" name="btnExec">Logar-se</button></td>
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
</body>
</html>