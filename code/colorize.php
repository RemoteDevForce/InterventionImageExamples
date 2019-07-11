<?php

use Intervention\Image\ImageManager;

require 'vendor/autoload.php';

$r = $_REQUEST['r'] ?? -100;
$g = $_REQUEST['g'] ?? 0;
$b = $_REQUEST['b'] ?? 100;

// create an image manager instance with favored driver
$manager = new ImageManager(array('driver' => 'imagick'));

// open an image file
$img = $manager->make('images/bg.jpg');

$img->fit(500,500);

$img->colorize($r, $g, $b);

echo $img->response('jpg', 70);
