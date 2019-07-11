<?php

use Intervention\Image\ImageManager;

require 'vendor/autoload.php';

$degrees = $_REQUEST['degrees'] ?? 90;

// create an image manager instance with favored driver
$manager = new ImageManager(array('driver' => 'imagick'));

// open an image file
$img = $manager->make('images/php.png');

// resize image instance
$img->resize(700, 500);
$img->rotate($degrees, '#000');

echo $img->response('jpg', 70);