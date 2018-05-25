<?php
require'init.php';

$max = 100;
$min = 1;
$number = round(($max + $min) / 2);


$app->add(['Header', "Is your number $number ?", 'size'=>1]);
$app->add('Text')
    ->addParagraph("(It seems that your number is between $max and $min)");


$app->add([
    'Button',
    'Yes, that\'s it!',
    'primary',
    'icon'=>'empty star',
]);

$app->add([
    'Button',
    'No, it\'s smaller.',
    'icon'=>'arrow down',
]);

$app->add([
    'Button',
    'No, it\'s bigger.',
    'icon'=>'arrow up'
]);

$app->add(['ui'=>'divider']);

$app->add(['Button', 'Play again.', 'basic', 'icon'=>'refresh']);
