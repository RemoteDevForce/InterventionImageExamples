<?php

use Intervention\Image\ImageManager;

require 'vendor/autoload.php';

$width = $_REQUEST['width'] ?? 500;
$height = $_REQUEST['height'] ?? 500;
$x = $_REQUEST['x'] ?? 2000;
$y = $_REQUEST['y'] ?? 2000;

// create an image manager instance with favored driver
$manager = new ImageManager(array('driver' => 'imagick'));

// open an image file
$img = $manager->make('images/bg.jpg');

// crop image instance
$img->crop($width, $height, $x, $y);

echo $img->response('jpg', 70);