<?php
require'init.php';

$app->add(['Header', 'Pythagorean Theorem']);

$col = $app->add('Columns');

$col_left = $col->addColumn(4);
$col_mid = $col->addColumn(8);
$col_right = $col->addColumn(4);

$col_left->add(['Image', 'pythagorean.png']);

$form = $col_mid->add('Form');
$form->addField('a', 'a = ');
$form->addField('b', 'b = ');

$col_right->add('Text')->addParagraph('Using calculation c = sqrt(a * a + b * b):');
$col_right->add(['Label', 'c =', 'detail' => rand(1,50)]);
