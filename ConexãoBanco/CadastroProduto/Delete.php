<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cadastro</title>
    </head>
    <body>
        <div class="CadastroProduto">
            <fieldset>
            <legend>Cadastrar Produto</legend>
                <form action="Delete.php" method="post">
                <input type="text" name="Codigo" placeholder="Digite codigo do produto">
                    <button type="submit" name="bt">Deletar</button>
                </form>
                <a href="Alterar.php">Alterar cadastro?</a>
                <a href="CadastrarProduto.php">Cadastrar produto?</a>
            </fieldset>
        </div>
        <?php 
        $Conn = new PDO("mysql:local=localhost;dbname=cadastroproduto;port=3306", "root", "");
        $dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);
        if(isset($_POST["bt"])){
        var_dump($dados);
                $sql = "DELETE FROM tb_cadastroproduto WHERE Codigo = :Codigo;";
                $add = $Conn->prepare($sql);
                $add ->bindParam(':Codigo', $dados['Codigo']);
        $add->execute();
        }
        ?>
    </body>
</html>