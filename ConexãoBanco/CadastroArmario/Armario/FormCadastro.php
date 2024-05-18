<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="./Css/styleCadastro.css">
</head>
<body>
  <div class="Conteiner">
    <form action="./FormCadastro.php" method="post">
        <table align="center">
            <tr>
                <th colspan="2">Armário</th>
            </tr>
            <tr>
                <th>Setor</th>
                <td>
                    <select name="Setor" id="">
                        <option value="1">Recepção</option>
                        <option value="2">Biblioteca</option>
                        <option value="3">Sala dos Professores</option>
                    </select>
                </td>
            </tr>
            <tr>
                <th>Código</th>
                <td><input type="text" name="codigo"></td>
            </tr>
            <tr>
                <th>Tamanho</th>
                <td>
                    <select name="tamanho">
                        <option value="P">Pequeno</option>
                        <option value="M">Médio</option>
                        <option value="G">Grande</option>
                    </select>
                </td>
            </tr>
            <tr>
                <th>Preço</th>
                <td><input type="text" name="preco"></td>
            </tr>
            <tr>
                <th>Status:</th>
                <td>
                    <select name="status" id="">
                        <option value="A">Ativo</option>
                        <option value="I">Inativo</option>
                        <option value="C">Manutenção</option>
                    </select>
                </td>
            </tr>
            <tr>
                <th>Observação:</th>
                <td><input type="text" name="obs"></td>
            </tr>
            <tr>
                <th>Data:</th>
                <td><input type="date" name="data"></td>
            </tr>
            <tr>
                <th>Fechadura:</th>
                <td>
                    <select name="fecha">
                        <option value="A">Senha</option>
                        <option value="B">Biometria</option>
                        <option value="C">Chave</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td align="center" colspan="2"><input type="submit" name="btnExec" value="Cadastrar"></input></td>
            </tr>
        </table>
        <div class="Link">
            <div class="Left">
                <a href="./Home.html">Voltal?</a>
            </div>
            <div class="Right">
                <a href="./Tabela.php">Ver tabela?</a>
            </div>
        </div>
    </form>
    <?php
    if(isset($_POST["btnExec"])){
      $conn = new PDO ("mysql:local=localhost;dbname=guarda_volumes354;port=3306", "root", "");
      $dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);
      $sql = "INSERT INTO armarios (setor, codigo, tamanho, preco, status, observacao, data, fechadura) VALUE (:setor, :codigo, :tamanha, :preco, :statusAr, :obs, :dataAr, :fecha);";
      $add = $conn->prepare($sql);
      $add ->bindParam(":setor", $dados["Setor"]);
      $add ->bindParam(":codigo", $dados["codigo"]);
      $add ->bindParam(":tamanha", $dados["tamanho"]);
      $add ->bindParam(":preco", $dados["preco"]);
      $add ->bindParam(":statusAr", $dados["status"]);
      $add ->bindParam(":obs", $dados["obs"]);
      $add ->bindParam(":dataAr", $dados["data"]);
      $add ->bindParam(":fecha", $dados["fecha"]);
      $add->execute();
    }
?>
</div>
</body>
</html>