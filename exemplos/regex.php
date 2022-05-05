<?php

$regex = '~(\d\d)(\w)~'; // Repare nos tils envolvendo a RegEx.
echo "Pattern: $regex" . PHP_EOL;

$alvo = '11a22b33c';
echo "Alvo: $alvo" . PHP_EOL;

echo PHP_EOL;
echo "Execução da função preg_match" . PHP_EOL;

$achou = preg_match($regex, $alvo, $match); // $match recebe só o primeiro match.
// preg_match retorna um booleano, confirmando se houve match ou não.
print_r($match); // Imprime o conteúdo de uma variável de forma legível para humanos.
    /**
     * Resultado esperado:
     * Array
     * (
     *     [0] => 11a
     *     [1] => 11
     *     [2] => a
     * )
     * 
     */
echo "Encontrou algum match? $achou" . PHP_EOL;

echo PHP_EOL;
echo "Execução da função preg_match_all" . PHP_EOL;

$achou = preg_match_all($regex, $alvo, $match); // $match recebe todos os matches.
echo "Encontrou algum match? $achou" . PHP_EOL; // Retorna 3, o número de matches.

print_r($match); // Imprime o conteúdo de uma variável de forma legível para humanos.
    /**
     * Resultado esperado: 
     * Array
     * (
     *     [0] => Array         // Match completo.
     *         (
     *             [0] => 11a
     *             [1] => 22b
     *             [2] => 33c
     *         )
     * 
     *     [1] => Array         // Primeiro grupo.
     *         (
     *             [0] => 11
     *             [1] => 22
     *             [2] => 33
     *         )
     * 
     *     [2] => Array         // Segundo grupo.
     *         (
     *             [0] => a
     *             [1] => b
     *             [2] => c
     *         )
     * 
     * )
     */


echo PHP_EOL;
echo "Capturando os índices no alvo com a função preg_match_all:" . PHP_EOL;
echo "\tForneça o quarto parâmetro PREG_OFFSET_CAPTURE" . PHP_EOL;

$achou = preg_match_all($regex, $alvo, $match, PREG_OFFSET_CAPTURE);
echo "Encontrou algum match? $achou" . PHP_EOL; // Retorna 3, o número de matches.

print_r($match); // Imprime o conteúdo de uma variável de forma legível para humanos.
echo "
    O resultado é um array de 3 dimensões, sendo:
        a primeira dimensão os grupos de matches (numerados de 0 a n), 
        a segunda dimensão as combinações de cada grupo de 0 a n, e
        a terceira dimensão contém a combinação do grupo + a posição no alvo.
    Outra leitura:
        1) dimensão dos grupos (inclusive o grupo zero, da combinação total);
        2) dimensão das combinações dentro do grupo;
        3) dimensão do texto combinado e da posição.
";