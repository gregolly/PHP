<?php 
$dsn = 'mysql:dbname=blog;host=127.0.0.1';
$dbuser = 'root';
$dbpass = '';


try{
  $pdo = new PDO($dsn, $dbuser, $dbpass);

  $sql = 'SELECT * FROM usuarios WHERE email = "alagumacoisa@gmail.com"';
  $sql = $pdo->query($sql);

  if($sql->rowCount() > 0){

    foreach($sql->fetchAll() as $usuarios){
      echo "Nome: ".$usuarios["nome"]." - ".$usuarios["email"]."<br>";
    }
  } else {
    echo "Não a usuarios cadastrados!";
  }

} catch(PDOException $e) {
  echo "Falhou".$e->getMessage();
}



?>