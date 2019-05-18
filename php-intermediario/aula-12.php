<?php
session_start();

$_SESSION['teste'] = "Gregolly frança";
echo 'Meu nome é:'.$_SESSION['teste'];


setcookie("meuteste", 'fulano de tal', time()+3600);
echo "Meu cookie".$_COOKIE["meuteste"];

?>