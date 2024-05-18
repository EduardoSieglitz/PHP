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
    <form action="./Tabela.php" method="post">
    <?php
        if(isset($_POST['btEditar'])){
            $dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);
            $id = $dados['editar'];
            var_dump($dados);
            echo"<input type='hidden' name='id' value='$id'>";
        }
    ?>
        <table border="1" align="center" style="border: 1px dashed black">
            <tr>
                <th align="center" colspan="2" style="font-size: 30px;">Armário</th>
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
    </form>
 <a href="Home.html">Home</a>
</div>
</body>
</html>