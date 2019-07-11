<?php

use Intervention\Image\ImageManager;

require 'vendor/autoload.php';

// create an image manager instance with favored driver
$manager = new ImageManager(array('driver' => 'imagick'));

// open an image file
$img = $manager->make('images/bg.jpg');

$img->fit(500,500);

$img->invert();

echo $img->response('jpg', 70);