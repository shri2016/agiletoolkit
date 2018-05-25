<?php

require '../vendor/autoload.php';

$app = new \atk4\ui\App('Interactivity');
$app->initLayout('Centered');

$menu = $app->add('Menu');
$menu->addItem(['Multiplication Table', 'icon'=>'table']);
$menu->addItem(['Pythagorean theorem', 'icon'=>'superscript']);
$menu->addItem(['Guess the number', 'icon'=>'game']);
