# InterventionImageExamples

This is a example on how to use the Intervention Image package built in PHP that leverages the ImageMagik/GD.

This was prepared for [@PHPVegas](https://www.twitter.com/phpvegas) - Slides can be found [here](https://docs.google.com/presentation/d/1IJVKz27LKLJmufqrNKHMcnxxyz8r5__vwBPzFENtNGM/edit?usp=sharing)

-- 

## Pre-requisites

To get started, make sure you have docker installed.

Run `composer install` to get the deps installed.

## Instructions

I've included a docker container to run the examples to make things alittle easier :)

To bring the stack up w logs in shell: `docker-compose up --build --force-recreate --remove-orphans --abort-on-container-exit --always-recreate-deps`

Then you can just hit cntl+c to get out and stop the containers.

I prefer to run the containers as daemon using the following cmd: `docker-compose up -d --build --force-recreate`

Then you can run this to tail logs later: `docker-compose logs -f`

To bring the daemonized stack down, run `docker-compose down`

To ssh into the container you can run the following: `docker-compose exec php bash`

Once the stack is up can you check if the example is working by hitting http://localhost:8080/

You should see phpinfo

## Examples

1. Basic

Add Watermark, Resize, Render JPG

http://localhost:8080/basic.php?width=1000&height=650&pos=top-left

2. Resize

Change an images size

http://localhost:8080/resize.php?width=100&height=100

3. Crop

Crop an image

http://localhost:8080/crop.php?width=100&height=100

4. Colorize

Change an images R+G+B profile 

http://localhost:8080/colorize.php?r=0&g=100&b=0

5. Invert

Inverse of current R+G+B profile 

http://localhost:8080/invert.php

6. Rotate

Rotate an image

http://localhost:8080/rotate.php?degrees=80

7. Text

Add text to image

http://localhost:8080/text.php?text=Follow%20me%20@OGProgrammer

