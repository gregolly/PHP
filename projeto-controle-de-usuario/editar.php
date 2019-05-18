<?php
require 'config.php';
$id = 0;
if(isset($_GET['id']) && empty($_GET['id']) == false){
  $id = addslashes($_GET['id']);
}  
if(isset($_POST['nome']) && empty($_POST['nome']) == false){
  $nome = addslashes($_POST['nome']);
  $email = addslashes($_POST['email']);

  $sql = "UPDATE usuarios SET nome = '$nome', email = '$email', id = '$id'";
  $pdo->query($sql);

  header("Location: index.php");
}


  $sql = "SELECT * FROM usuarios WHERE id = '$id'";
  $sql = $pdo->query($sql);
  if($sql->rowCount() > 0){
    $data = $sql->fetch();
  } else {
  header("Location: index.php");
}

?>
<style>
  input{
    display: block;
    margin-bottom: 20px;
  }
</style>
<form method="POST">
  <label>Nome:</label>
  <input type="text" name="nome" value="<?= $dado['nome']; ?>">
  <label>Email:</label>
  <input type="text" name="email" value="<?= $dado['email']; ?>">

  <input type="submit" value="Atualizar">
</form>