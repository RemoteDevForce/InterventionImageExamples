<?php

use Intervention\Image\ImageManager;

require 'vendor/autoload.php';

$text = $_REQUEST['text'] ?? 'PHP Vegas All Day Everyday !';

// create an image manager instance with favored driver
$manager = new ImageManager(array('driver' => 'imagick'));

// open an image file
$img = $manager->make('images/2.jpg');
$img->resize(1024, 768);

// use callback to define details
$img->text($text, 510, 360, function($font) {
    $font->file('res/font.ttf');
    $font->size(42);
    $font->color('#800000');
    $font->align('center');
    $font->valign('top');
    $font->angle(10);
});

echo $img->response('jpg', 70);