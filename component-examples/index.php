<?php

require '../vendor/autoload.php';

$app = new \atk4\ui\App('UI elements');
$app->initLayout('Centered');

$segment = $app->add(['View', 'ui' => 'segment']);
$segment->add(['Header', 'Button', 'aligned' => 'center', 'icon' => 'external share', 'subHeader' => 'main things']);

$header_1 = $app->add(['Header','Buttons with diferent attention level','size'=>1]);
$button_simple = $app->add(['Button','Simple button']);

$button_primary = $app->add(['Button','Primary','primary']);

$app->add(['ui'=>'divider']);

$header_2 = $app->add(['Header','Buttons with diferent visual characteristics','size'=>1]);

$button_huge = $app->add(['Button','Huge button','huge']);
$button_violet = $app->add(['Button','Violet button','violet']);
$button_mix = $app->add(['Button','Huge and violete button','huge violet']);

$app->add(['ui'=>'divider']);

$header_3 = $app->add(['Header','Buttons with icons','size'=>1]);

$button_icon_left = $app->add(['Button','Left icon','orange','icon'=>'thumbs up']);
$button_icon_right = $app->add(['Button','Right icon', 'blue','iconRight'=>'star']);

$app->add(['ui'=>'divider']);

$header_4 = $app->add(['Header','Buttons with links','size'=>1]);

$button_link_to_page = $app->add(['Button','To another page','big yellow','icon'=>'external'])->link(['another']);
$button_link_to_website = $app->add(['Button','To website','big green','iconRight'=>'world'])->link('http://www.agiletoolkit.org');

require('all.php');
