<?php
require'init.php';

$number = 123;

$app->add(['Header', "I won, your guessed number is $number !"]);

$app->add(['ui'=>'divider']);

$app->add(['Button', 'Play again.', 'basic', 'icon'=>'refresh']);
