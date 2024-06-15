<?php 
session_start();
if(isset($_SESSION['id'])){
$_SESSION['id'];
}
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
        <th>nome</th>
        <th>login</th>
        <th>senha</th>
        <th>tipo</th>
        <th>Editar</th>
        <th>Excluir</th>
      </tr>
      <?php 
       $conn = new PDO ("mysql:local=localhost;dbname=cadastro_usuario;port=3306", "root", "");
       $sql = "SELECT * FROM usuarios;";
       $Query = $conn->query($sql);
       while($row = $Query->fetch()){
        echo "
        <tr>
          <th>$row[id_usuario]</th>
          <th>$row[nome]</th>
          <th>$row[login]</th>
          <th>$row[senha]</th>
          <th>$row[tipo]</th>
          <form action='Tabela.php' method='post'>
          <th><button type='submit' name='btEditar'>Editar</button>
          <input type='hidden' name='editar' value='$row[id_usuario]'></th>
          </form>
          <form action='Delete.php' method='post'>
          <th><button type='submit' name='btDelete'>Excluir</button>
          <input type='hidden' name='delete' value='$row[id_usuario]'>
          </th>
          </form>
        </tr>
        ";
      }
      if(isset($_POST['btEditar'])){
        $editar = $_POST['editar'];
        $_SESSION['id'] = $editar;
        header("LOCATION: FormEdita.php");
      }
      ?>
      <div class="Link">
            <div class="Left">
                <a href="./Home.html">Voltar?</a>
            </div>
            <div class="Right">
                <a href="./FormCadastro.php">Cadastrar?</a>
            </div>
        </div>
    </table>
  </div>
</body>
</html>