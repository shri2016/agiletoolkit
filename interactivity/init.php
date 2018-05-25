<?php

require '../vendor/autoload.php';

$app = new \atk4\ui\App('Interactivity');
$app->initLayout('Centered');

$menu = $app->add('Menu');
$menu->addItem(['Multiplication Table', 'icon'=>'table'])
    ->link(['multiplication']);
$menu->addItem(['Pythagorean theorem', 'icon'=>'superscript'])
    ->link(['pythagorean']);
$menu->addItem(['Guess the number', 'icon'=>'game']);
