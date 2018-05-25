<?php
require'init.php';

$app->add(['Header', 'Multiplication Table']);

$seg = $app->add(['ui'=>'segment']);

$seg->add(['Text', 'Select multiplier: ']);

for($i = 1; $i < 10; $i++) {
    $l = $seg->add([
        'Label', 
        $i,
        (isset($_GET['result']) && $_GET['result'] == $i) ? 'green' : 'blue'
    ]);
    $l->link(['result'=>$i]);
}

if (isset($_GET['result'])) {
    $multiplier = $_GET['result'];

    $data = [];
    for($i = 1; $i < 10; $i++) {
        $data[] = ['a' => $i, 'b' => $multiplier, 'm' => $multiplier * $i];
    }

    $table = $app->add('Table');
    $table->setSource($data, ['a', 'b']);
    $table->addColumn('m', null, ['caption'=>'A * B']);
}