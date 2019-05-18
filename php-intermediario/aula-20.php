<?php 
$dsn = 'mysql:dbname=blog;host=127.0.0.1';
$dbuser = 'root';
$dbpass = '';


try{
  $pdo = new PDO($dsn, $dbuser, $dbpass);

  $nome = 'Pedro';
  $id = 3;

  $sql = "UPDATE usuarios SET nome = :novonome WHERE id = :id";
  $sql = $pdo->prepare($sql);

  $sql->bindValue(':novonome', $nome);
  $sql->bindValue(':id', $id);
  $sql->execute();

  echo "Atualizado com sucesso!";

} catch(PDOException $e) {
  echo "Falhou".$e->getMessage();
}



?>