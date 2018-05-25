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
$form->buttonSave->set('Calculate');
$form->onSubmit(function($form) use($col_right) {
    $a = $form->model['a'];
    $b = $form->model['b'];
    $c = $a*$a + $b*$b;
    return $col_right->jsReload(['result'=>$c]);
    //return 'success';
});

$col_right->add('Text')->addParagraph('Using calculation c = sqrt(a * a + b * b):');
if (isset($_GET['result'])) {
    $col_right->add(['Label', 'c =', 'detail' => $_GET['result']]);
}
