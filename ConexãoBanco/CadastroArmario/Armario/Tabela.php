<?php 
session_start();
$_SESSION['id'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tabela Armario</title>
  <link rel="stylesheet" href="./Css/styleTabela.css">
</head>
<body>
  <div class="Conteiner">
  <table>
      <tr>
        <th>Id</th>
        <th>Setor</th>
        <th>Codigo</th>
        <th>Tamanho</th>
        <th>Preço</th>
        <th>Status</th>
        <th>Observações</th>
        <th>Data</th>
        <th>Fechadura</th>
        <th>Editar</th>
        <th>Excluir</th>
      </tr>
      <?php 
       $conn = new PDO ("mysql:local=localhost;dbname=guarda_volumes354;port=3306", "root", "");
       $sql = "SELECT * FROM armarios;";
       $Query = $conn->query($sql);
       while($row = $Query->fetch()){
        echo "
        <tr>
          <th>$row[id_armarios]</th>
          <th>$row[setor]</th>
          <th>$row[codigo]</th>
          <th>$row[tamanho]</th>
          <th>$row[preco]</th>
          <th>$row[status]</th>
          <th>$row[observacao]</th>
          <th>$row[data]</th>
          <th>$row[fechadura]</th>
          <form action='Tabela.php' method='post'>
          <th><button type='submit' name='btEditar'>Editar</button>
          <input type='hidden' name='editar' value='$row[id_armarios]'></th>
          </form>
          <form action='Tabela.php' method='post'>
          <th><button type='submit' name='btDelete'>Excluir</button>
          <input type='hidden' name='delete' value='$row[id_armarios]'>
          </th>
          </form>
        </tr>
        ";
      }
      if(isset($_POST['btDelete'])){
        $delete = $_POST['delete'];
        $sql = "DELETE FROM armarios WHERE id_armarios = :id";
        $Query = $conn->prepare($sql);
        $Query->bindParam(":id", $delete);
        $Query->execute();
        header("LOCATION: http://localhost/GitHub/PHP/Conex%c3%a3oBanco/CadastroArmario/Armario/Tabela.php");
      }
      if(isset($_POST['btEditar'])){
        $editar = $_POST['editar'];
        $_SESSION['id'] = $editar;
        header("LOCATION: http://localhost/GitHub/PHP/Conex%C3%A3oBanco/CadastroArmario/Armario/FormEdita.php");
      }
      ?>
      <div class="Link">
            <div class="Left">
                <a href="./Home.html">Voltal?</a>
            </div>
            <div class="Right">
                <a href="./FormCadastro.php">Cadastrar?</a>
            </div>
        </div>
    </table>
  </div>
</body>
</html>