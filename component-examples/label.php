<?php

require '../vendor/autoload.php';

$app = new \atk4\ui\App('UI elements');
$app->initLayout('Centered');

$segment = $app->add(['View', 'ui' => 'segment']);
$segment->add(['Header', 'Label', 'aligned' => 'center', 'icon' => 'talk outline', 'subHeader' => 'main things']);

$header_1 = $app->add(['Header','Basic label','size'=>1]);

$label_simple = $app->add(['Label','Simple label'])
  ->link(['index']);

$app->add(['ui'=>'divider']);

$header_2 = $app->add(['Header','Labels with different colors and sizes','size'=>1]);
$label_massive = $app->add(['Label','Massive label','massive']);
$label_colorful = $app->add(['Label','Colorful label','red']);
$label_multi = $app->add(['Label','Label with special color and size','massive red']);

$header_3 = $app->add(['Header','Labels with different shapes','size'=>1]);

$label_circular_red = $app->add(['Label','','red circular']);
$label_circular_orange = $app->add(['Label','','orange circular']);
$label_circular_yellow = $app->add(['Label','','yellow circular']);
$label_circular_green = $app->add(['Label','','green circular']);
$label_circular_teal = $app->add(['Label','','teal circular']);
$label_circular_blue = $app->add(['Label','','blue circular']);
$label_circular_violet = $app->add(['Label','','violet circular']);

$app->add(['ui'=>'divider']);

$label_tag = $app->add(['Label',"It's a tag!",'tag']);
$label_tag_colorful = $app->add(['Label',"It's a colorful tag!",'red tag']);

$app->add(['ui'=>'divider']);

$label_ribbon_right = $app->add(['Label',"It's a right ribbon label",'right ribbon']);
$view = $app->add(['View']);
$label_ribbon_left = $view->add(['Label',"It's a left ribbon label",'ribbon']);

$app->add(['ui'=>'divider']);

$header_4 = $app->add(['Header','Label with icon','size'=>1]);

$label_icon = $app->add(['Label','Label and icon','huge','icon'=>'home']);
$label_icon_loading = $app->add(['Label','Please, stand by','big','iconRight'=>'loading setting']);

/*$app->add(['ui'=>'divider']);

$header_5 = $app->add(['Header','Floating label','size'=>1]);

$number_1 = rand(10,150);
$number_2 = rand(1,30);

$menu = $app->add('Menu');
$menu->addItem('Inbox')->add(['Label',$number_1, 'floating red']);
$menu->addMenu('Others')->addItem('Draft')->add(['Label', $number_2, 'floating blue']);*/

require('all.php');
