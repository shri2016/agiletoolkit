<?php

require '../vendor/autoload.php';

$app = new \atk4\ui\App('UI elements');
$app->initLayout('Centered');

$segment = $app->add(['View', 'ui' => 'segment']);
$segment->add(['Header', 'Message', 'aligned' => 'center', 'icon' => 'mail outline', 'subHeader' => 'main things']);

$message_simple = $app->add(['Message','This is a title of your message','icon' => 'newspaper']);
$message_simple->text->addParagraph('Just some text');
$message_simple->text->addParagraph('Just some text');

$message_success = $app->add(['Message','This message show success','type'=>'success','icon' => 'checkmark']);
$message_success->text->addParagraph('Some good information');

$message_error = $app->add(['Message','This is a message about error','type'=>'error','icon' => 'warning sign']);
$message_error->text->addParagraph('More about error');

$message_info = $app->add(['Message','This is info message','type'=>'info','icon' => 'info']);
$message_info->text->addParagraph('Some additional information');

$message_warning = $app->add(['Message','This is warning message','type'=>'warning sign','icon' => 'warning']);
$message_warning->text->addParagraph('More information about warning');

require('all.php');
