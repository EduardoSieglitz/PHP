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
                <form action="CadastrarProduto.php" method="post">
                    <legend>Cadastrar Produto</legend>
                    <input type="text" name="Nome" placeholder="Digite nome do produto">
                    <input type="text" name="Preco" placeholder="Digite preço do produto">
                    <input type="text" name="Quantidade" placeholder="Digite quantidade do produto">
                    <button type="submit" name="bt">Cadastrar</button>
                </form>
            </fieldset>
        </div>
        <?php 
        $Conn = new PDO("mysql:host=localhost;dbname=cadastroproduto;port=3306", "root", "");
        $dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);
        var_dump($dados);
        if(isset($_POST["bt"])){
            $sql = "INSERT INTO tb_cadastroproduto (Nome, preco, Quantidade) VALUES (:nome, :preco, :quantidade);";
            $add = $Conn->prepare($sql);
            $add->bindParam(':nome', $dados['Nome']);
            $add->bindParam(':preco', $dados['Preco']);
            $add->bindParam(':quantidade', $dados['Quantidade']);
            $add->execute();
    }
?>

    </body>
</html>