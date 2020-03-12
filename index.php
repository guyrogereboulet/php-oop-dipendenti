<?php
require_once __DIR__ . '/classes/dipendente.php';
require_once __DIR__ . '/classes/dirigente.php';
require_once __DIR__ . '/classes/operaio.php';

$guy = new Dirigente('18565486', 'Guy Roger', 'Eboulet', 'via dei mille 10');


try {
    $guy->setBonus(5);
} catch (Exception $e) {
    echo 'errore' . $e->getMessage();
}
var_dump($guy);

echo $guy->getBonus();

$john = new Operaio('18565486', 'Guy Roger', 'Eboulet', 'via dei mille 10', 20);
var_dump($john);
