<?php

use Intervention\Image\ImageManager;

require 'vendor/autoload.php';

$pos = $_REQUEST['pos'] ?? 'center';
$width = $_REQUEST['width'] ?? 340;
$height = $_REQUEST['height'] ?? 240;

// create an image manager instance with favored driver
$manager = new ImageManager(array('driver' => 'imagick'));

// open an image file
$img = $manager->make('images/1.jpg');

// insert a watermark
$img->insert('images/php.png', $pos);

// resize image instance
$img->resize($width, $height);

// save image in desired format
$img->save('images/basic.php.jpg');

?>
<img src="images/basic.php.jpg" />
