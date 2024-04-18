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
                <form action="CadastrarProduto.php" method="post">
                    <input type="text" name="Nome" placeholder="Digite nome do produto">
                    <input type="text" name="Preco" placeholder="Digite preço do produto">
                    <input type="text" name="Quantidade" placeholder="Digite quantidade do produto">
                    <input type="text" name="Codigo" placeholder="Digite codigo do produto, 6 caracteres">
                    <button type="submit" name="bt">Cadastrar</button>
                </form>
                <a href="Alterar.php">Alterar cadastro?</a>
            </fieldset>
        </div>
        <?php 
        $Conn = new PDO("mysql:local=localhost;dbname=cadastroproduto;port=3306", "root", "");
        $dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);
        if(isset($_POST["bt"])){
            var_dump($dados);
        $sql = "INSERT INTO tb_cadastroproduto(Nome, preco, Quantidade, Codigo) VALUES (:nome, :preco, :quantidade, :Codigo);";
        $add = $Conn->prepare($sql);
        $add ->bindParam(':nome', $dados['Nome']);
        $add ->bindParam(':preco', $dados['Preco']);
        $add ->bindParam(':quantidade', $dados['Quantidade']);
        $add ->bindParam(':Codigo', $dados['Codigo']);
        $add->execute();
        }
        ?>
    </body>
</html>