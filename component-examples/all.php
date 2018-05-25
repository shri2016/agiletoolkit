<?php

$app->add(['ui'=>'divider']);

$header_5 = $app->add(['Header','Another components','size'=>1]);

$button_to_label = $app->add(['Button','Labels','huge red'])->link(['label']);
$button_to_button = $app->add(['Button','Buttons','huge teal'])->link(['index']);
$button_to_message = $app->add(['Button','Message','huge yellow'])->link(['message']);
$button_to_menu = $app->add(['Button','Menu','huge violet'])->link(['menu']);
$button_to_tabs = $app->add(['Button','Tabs','huge black'])->link(['tabs']);
