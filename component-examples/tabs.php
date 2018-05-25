<?php

require '../vendor/autoload.php';

$app = new \atk4\ui\App('UI elements');
$app->initLayout('Centered');

$segment = $app->add(['View', 'ui' => 'segment']);
$segment->add(['Header', 'Tabs', 'aligned' => 'center', 'icon' => 'clone', 'subHeader' => 'main things']);

$tab = $app->add('Tabs');

$tab->addTab('Static Tab')->add('LoremIpsum');

$tab->addTab('Dynamic form with text', function ($tab) {
    sleep(2);
    $tab->add(['LoremIpsum', 'size' => 2]);
});

$tab->addTab('Dynamic Form', function ($tab) {
    sleep(2);
    $m_register = new \atk4\data\Model(new \atk4\data\Persistence_Array($a));
    $m_register->addField('name', ['caption' => 'Please enter your name']);
    $form = $tab->add(new \atk4\ui\Form(['segment' => true]));
    $form->setModel($m_register);
    $form->onSubmit(function ($form) {
        if ($form->model['name'] == '') {
            return $form->error('name', "This place can't be empty");
        }
    });
});

require('all.php');
