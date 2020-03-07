<?php
require __DIR__ . '/fullstackphp/fsphp.php';
fullStackPHPClassName("02.06 - Arrays, vetores e pilhas");

/**
 * [ arrays ] https://php.net/manual/pt_BR/language.types.array.php
 */
fullStackPHPClassSession("index array", __LINE__);

$arrA = array(1, 2, 3);
$arrA = [0, 1, 2, 3];

echo '<pre>';
var_dump($arrA);


$arrayIndex = [
    "Brian",
    "Angus",
    "Malcolm"
];
echo "Imprimiu o valor : $arrayIndex[2] <br>";

$arrayIndex[] = "Cliff";
$arrayIndex[] = "Phil";

var_dump($arrayIndex);

/**
 * [ associative array ] "key" => "value"
 */
fullStackPHPClassSession("associative array", __LINE__);

$arrayAssoc = [
    "vocal" => "Brian",
    "solo_guitar" => "Angus",
    "base_guitar" => "Malcolm",
    "bass_guitar" => "Cliff"
];
$arrayAssoc["drums"] = "Phil";
$arrayAssoc["rock_band"] = "AC/DC";

var_dump($arrayAssoc);


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
 * [ multidimensional array ] "key" => ["key" => "value"]
 */
fullStackPHPClassSession("multidimensional array", __LINE__);

$brian = ["Brian", "Mic"];
$angus = ["name" => "Angus", "intrument" => "Guitar"];
$instruments = [
    $brian,
    $angus
];
var_dump($instruments);

var_dump([
    "brian" => $brian,
    "angus" => $angus
]);

/**
 * [ array access ] foreach(array as item) || foreach(array as key => value)
 */
fullStackPHPClassSession("array access", __LINE__);

$acdc = [
    "band" => "AC/DC",
    "vocal" => "Brian",
    "solo_guitar" => "Angus",
    "base_guitar" => "Malcolm",
    "bass_guitar" => "Cliff",
    "drums" => "Phil",
    "keyboard" => "Jhon"
];

echo "<p>O vocal da banda <br>AC/DC é 
{$acdc["vocal"]}, e junto com {$acdc['solo_guitar']}
 fazem um ótimo show de rock!</p>";

$pearl = [
    "band" => "Pearl Jam",
    "vocal" => "Eddie",
    "solo_guitar" => "Mike",
    "base_guitar" => "Stone",
    "bass_guitar" => "Jeff",
    "drums" => "Jack",
];

$rockBands = [
    "acdc" => $acdc,
    "pearl_jam" => $pearl
];

var_dump($rockBands);

echo "<p>{$rockBands['pearl_jam']['keyboard']}</p>";


fullStackPHPClassSession("array access acdc", __LINE__);

foreach ($acdc as $item) {
    echo "<p>{$item}</p>";
}

foreach ($arrayPessoa as $key => $value) {

    if ($key === "age") {
       echo "<p>{$key} is {$value}</p>";
    }
}



foreach ($rockBands as $rockBand) {
    $art = "<article><h1>%s</h1><p>%s</p><p>%s</p><p>%s
    </p><p>%s</p><p>%s</p></article>";
    vprintf($art, $rockBand);
}
echo '</pre>';
