<?php

use Intervention\Image\ImageManager;

require 'vendor/autoload.php';

$width = $_REQUEST['width'] ?? 500;
$height = $_REQUEST['height'] ?? 500;

// create an image manager instance with favored driver
$manager = new ImageManager(array('driver' => 'imagick'));

// open an image file
$img = $manager->make('images/bg.jpg');

// resize image instance
$img->fit($width, $height);

echo $img->response('jpg', 70);