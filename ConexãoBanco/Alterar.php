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
                <form action="Alterar.php" method="post">
                <input type="text" name="Alterar" placeholder="Digite a alteração">
                <input type="text" name="Codigo" placeholder="Digite codigo do produto">
                    <select name="Tipo">
                        <option value="Nome">Nome</option>
                        <option value="Valor">Valor</option>
                        <option value="Quantidade">Quantidade</option>
                    </select>
                    <button type="submit" name="bt">Alterar</button>
                </form>
                <a href="CadastrarProduto.php">Cadastrar produto?</a>
            </fieldset>
        </div>
        <?php 
        $Conn = new PDO("mysql:local=localhost;dbname=cadastroproduto;port=3306", "root", "");
        $dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);
        if(isset($_POST["bt"])){
        var_dump($dados);
        if($dados['Tipo'] == 'Valor'){
        $sql = "UPDATE tb_cadastroproduto SET Preco = :Valor WHERE Codigo = :Codigo;";
        $add = $Conn->prepare($sql);
        $add ->bindParam(':Valor', $dados['Alterar']);
        $add ->bindParam(':Codigo', $dados['Codigo']);
        }
        if($dados['Tipo'] == 'Nome'){
            $sql = "UPDATE tb_cadastroproduto SET Nome = :nome WHERE Codigo = :Codigo;";
            $add = $Conn->prepare($sql);
            $add ->bindParam(':nome', $dados['Alterar']);
            $add ->bindParam(':Codigo', $dados['Codigo']);
            }
            if($dados['Tipo'] == 'Quantidade'){
                $sql = "UPDATE tb_cadastroproduto SET Quantidade = :Quantidade WHERE Codigo = :Codigo;";
                $add = $Conn->prepare($sql);
                $add ->bindParam(':Quantidade', $dados['Alterar']);
                $add ->bindParam(':Codigo', $dados['Codigo']);
                }
        $add->execute();
        }
        ?>
    </body>
</html>