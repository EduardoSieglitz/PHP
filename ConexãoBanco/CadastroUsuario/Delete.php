<?php 
   $conn = new PDO ("mysql:local=localhost;dbname=cadastro_usuario;port=3306", "root", "");
if(isset($_POST['btDelete'])){         
    $delete = $_POST['delete'];
    $sql = "DELETE FROM usuarios WHERE id_usuario = :id";
    $Query = $conn->prepare($sql);
    $Query->bindParam(":id", $delete);
    $Query->execute();
  }
  header("location: Tabela.php");
?>
