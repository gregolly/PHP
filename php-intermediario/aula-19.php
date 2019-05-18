<?php 
$dsn = 'mysql:dbname=blog;host=127.0.0.1';
$dbuser = 'root';
$dbpass = '';


try{
 $pdo = new PDO($dsn, $dbuser, $dbpass);

 $sql = "DELETE FROM usuarios WHERE id = 5";
 $sql = $pdo->query($sql);
} catch(PDOException $e) {
  echo "Falhou: ".$e->getMessage();
}



?>