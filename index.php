<?php
require __DIR__ . '/fullstackphp/fsphp.php';
fullStackPHPClassName("02.03 - Comandos de saída");
echo "<pre>";

require_once __DIR__ . '/vendor/autoload.php';

$address= new \Sources\Inheritance\Address\Address("Rua XPT",01);

$event = new \Sources\Inheritance\Event\EventLive('Estudos PHP',Date('d/m/Y h:i'),'1000',4,$address);

var_dump($event);
$event->register('Estudante 1', 'estudante1@email.com');
$event->register('Estudante 2', 'estudante2@email.com');
$event->register('Estudante 3', 'estudante3@email.com');
$event->register('Estudante 4', 'estudante4@email.com');
$event->register('Estudante 5', 'estudante5@email.com');
$event->register('Estudante 6', 'estudante6@email.com');

echo "</pre>";
//fullStackPHPClassSession("tudo maiúsculo", __LINE__);
//var_dump(strtoupper("vidraça"));