<?php

require 'vendor/autoload.php';

$app = new \atk4\ui\App();

$app->initLayout('Centered');

$app->add([
    'Button', 
    'Hello World!',
    'huge green fluid',
    'icon'=>'trophy',
    ])->link('http://google.co.in');

$button = new \atk4\ui\Button('Hello World!', 'huge green fluid');
$button->icon = 'trophy';
$app->add($button);
$button->link('http://google.com');

