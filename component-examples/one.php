<?php

require '../vendor/autoload.php';

$app = new \atk4\ui\App('UI elements');
$app->initLayout('Centered');

$app->add(['LoremIpsum']);

$app->add(['Button','Back','big primary'])
  ->link(['menu']);
