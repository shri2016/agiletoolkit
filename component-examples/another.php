<?php

require '../vendor/autoload.php';

$app = new \atk4\ui\App('Page');
$app->initLayout('Centered');

$app->add(['LoremIpsum']);
