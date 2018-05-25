<?php

require '../vendor/autoload.php';

$app = new \atk4\ui\App('1st mail box');
$app->initLayout('Centered');

$app->add(['LoremIpsum']);

$app->add(['Button','Back','big primary'])
  ->link(['menu']);
