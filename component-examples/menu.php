<?php

require '../vendor/autoload.php';

$app = new \atk4\ui\App('UI elements');
$app->initLayout('Centered');

$segment = $app->add(['View', 'ui' => 'segment']);
$segment->add(['Header', 'Menu', 'aligned' => 'center', 'icon' => 'sitemap', 'subHeader' => 'main things']);

$menu = $app->add('Menu');
$menu->addItem('Mailbox №1', 'mailbox_1.php');
$menu->addItem('Mailbox №2', 'mailbox_2.php');
$menu->add(['DropDown', 'Choose your favorite recipient', 'js' => ['on' => 'hover']])->setSource(['John', 'Mark', 'Ann']);

$submenu = $menu->addMenu('Sub-menu');
$submenu->addItem('one', 'one.php');
$submenu->addItem(['two', 'label' => 'VIP']);
$submenu->addItem(['three','disabled']);

$number = rand(10,250);

$menu = $app->add(['Menu', 'vertical pointing']);
$menu->addItem(['Inbox', 'label' => [$number, 'teal left pointing']]);
$menu->addItem('Spam');
$menu->addItem()->add(new \atk4\ui\FormField\Input(['placeholder' => 'Search', 'icon' => 'search']))->addClass('transparent');

$menu = $app->add(['Menu', 'secondary vertical pointing']);
$menu->addItem(['Inbox', 'label' => ['123', 'teal left pointing']]);
$menu->addItem('Spam');
$menu->addItem()->add(new \atk4\ui\FormField\Input(['placeholder' => 'Search', 'icon' => 'search']))->addClass('transparent');
$menu = $app->add(['Menu', 'vertical']);

$group = $menu->addGroup('Products');
$group->addItem('Enterprise');
$group->addItem('Consumer');
$group = $menu->addGroup('Hosting');
$group->addItem('Shared');
$group->addItem('Dedicated');

$menu = $app->add(['Menu', 'vertical']);

$item = $menu->addItem();
$item->add(['Header', 'size' => 4])->set('Promotions');
$item->add(['View', 'element' => 'P'])->set('Check out our promotions');

require('all.php');
