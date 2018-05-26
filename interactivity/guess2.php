<?php
require'init.php';

$max = $_GET['max'];
$min = $_GET['min'];
$number = round(($max + $min) / 2);


$app->add(['Header', "Is your number $number ?", 'size'=>1]);
$app->add('Text')
    ->addParagraph("(It seems that your number is between $max and $min)");


$app->add([
    'Button',
    'Yes, that\'s it!',
    'primary',
    'icon'=>'empty star',
])->link(['guess3', 'number'=>$number]);

$app->add([
    'Button',
    'No, it\'s smaller.',
    'icon'=>'arrow down',
])->link(['max'=>$number-1, 'min'=>$min]);

$app->add([
    'Button',
    'No, it\'s bigger.',
    'icon'=>'arrow up'
])->link(['max'=>$max, 'min'=>$number+1]);

$app->add(['ui'=>'divider']);

$app->add(['Button', 'Play again.', 'basic', 'icon'=>'refresh'])
    ->link(['guess1']);
