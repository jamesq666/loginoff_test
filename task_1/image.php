<?php

$image = 'images/img.jpg';
header('Content-type: image/jpeg');
readfile($image);
