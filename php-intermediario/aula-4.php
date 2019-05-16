<?php

function somarNumero($x, $y){
  //$conta = $x + $y;
  return $x + $y;
}

$resultado = somarNumero(10, 20);

echo "resultado: " . $resultado;

function mostrarNome(){
  return 'Gregolly';
}
$nome = mostrarNome();
echo "<br>". "meu nome é:" . $nome;