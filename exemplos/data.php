<?php

$alvo = 'Setembro 21';
$regex = '~(\w+)\s(\d+)~'; // Grupos (\w+) e (\d+).
$novoTexto = '$2 de $1'; // Uso de backreference em PHP.

$resultado = preg_replace($regex, $novoTexto, $alvo);

echo $resultado . PHP_EOL . PHP_EOL;

echo "Troque o formato da data 2007-12-31 para 31-12-2007: " . PHP_EOL;

$string = '2007-12-31';
$regex = '~(\d{4})-(\d{2})-(\d{2})~';
$novoTexto = '$3-$2-$1';

$resultado = preg_replace($regex, $novoTexto, $string);
echo $resultado . PHP_EOL . PHP_EOL;

echo "Troque o hífen da data a seguir por uma barra: '31-12-2007': " . PHP_EOL;

$string = '31-12-2007';
$regex = '~\-~';
$novoTexto = '/';
// $resultado = str_replace('-', '/', $string); // Meio nativo do PHP, sem RegEx.
$resultado = preg_replace($regex, $novoTexto, $string);
echo $resultado;
