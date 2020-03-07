<?php
require __DIR__ . '/fullstackphp/fsphp.php';
fullStackPHPClassName("02.06 - Arrays, vetores e pilhas");

/*
 * [ while ] https://php.net/manual/pt_BR/control-structures.while.php
 * [ do while ] https://php.net/manual/pt_BR/control-structures.do.while.php
 */
fullStackPHPClassSession("while, do while", __LINE__);

echo '<pre>';


$arrayCursosIndex = [
    "NET",
    "PHP",
    "Java",
    "Ruby",
    "Python",
];
var_dump($arrayCursosIndex);

$net = [
    'microsoft' => 'C# com Ecommerce',
    'azure' => 'deploy automatizado',
    'devops' => 'testes unitários'
];

$php = [
    'bonieky' => 'php do zero ao profissional',
    'upinside' => 'laravel 5.8',
    'schoolofnet' => 'vuejs com laravel',
    
];

$cursos = [
    "course_net" => $net,
    "course_php" => $php,   
];

echo "<p>Lista de Cursos</p>";
var_dump($cursos);
echo '<br>';
echo "<p>Array course_net</p>";
var_dump($cursos['course_net']['microsoft']);

//  echo "<p>{$arrayPessoa['lastName']}</p>";

echo "<p>Loopin com WHILE</p>";
$looping = 1;
$while = [];

while ($looping <= 5) {
    $while[] = $looping;
    $looping++; //looping = looping + 1
}
var_dump($while);


$looping = 5;
$while = [];

do {
    $while[] = $looping;
    $looping--; //looping = looping - 1
} while ($looping >= 1);
var_dump($while);

/*
 * [ for ] https://php.net/manual/pt_BR/control-structures.for.php
 */
fullStackPHPClassSession("for", __LINE__);

echo "<p> total de index" . count($arrayCursosIndex) . "</p>";

for ($i = 0; $i < count($arrayCursosIndex); $i++) {
    echo "<p>{$arrayCursosIndex[$i]}</p>";
}

$arrayPessoa = [
    "name" => "Web Developer",
    "address" => "Rua Endereço",
    "number" => "0001",
    "cep" => "00000-01",
    "age" => 16,
];



$arrayPessoa['name'] = "Phil";
$arrayPessoa["address"] = "AC/DC";
$arrayPessoa[] = "+55";

var_dump($arrayPessoa);


/**
 * [ break ] https://php.net/manual/pt_BR/control-structures.break.php
 * [ continue ] https://php.net/manual/pt_BR/control-structures.continue.php
 */
fullStackPHPClassSession("break, continue", __LINE__);


for ($c = 1; $c <= 20; $c++) {

    if ($c % 2 == 1) {
        continue;
    }

    if ($c >= 20) {
        break;
    }

    echo "<p>Pulou + 2 :: {$c}</p>";
}


/**
 * [ foreach ] https://php.net/manual/pt_BR/control-structures.foreach.php
 */
fullStackPHPClassSession("foreach", __LINE__);


$array = [];
for ($ar = 0; $ar <= 2; $ar++) {
    $array[] = $ar;
}

var_dump($array);

foreach ($array as $item) {
    echo "<p>Valor impresso {$item}</p>";
}

fullStackPHPClassSession("Foreach com key  value", __LINE__);


foreach ($arrayPessoa as $chaveDoArray => $valorDaChave) {
    echo "<p>A chave é {$chaveDoArray} Valor impresso {$valorDaChave}</p>";
}
echo '</pre>';
