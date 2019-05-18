<?php 
require 'config.php';
if(isset($_POST['nome']) && empty($_POST['nome']) == false){
  $nome = addslashes($_POST['nome']);
  $email = addslashes($_POST['email']);
  $senha = md5(addslashes($_POST['senha']));

  $sql = "INSERT INTO usuarios SET nome = '$nome', email = '$email', senha = '$senha'";
  $pdo->query($sql);

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
<label for="">Nome:</label>
  <input type="text" name="nome">
  <label for="">Email:</label>
  <input type="text" name="email">
  <label for="">Senha:</label>
  <input type="password" name="senha">

  <input type="submit" value="Cadastrar">
</form>