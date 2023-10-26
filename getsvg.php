<?php 

$svg = $_GET['svg'];

if($svg == 'logo') {
  $file = './images/logo.svg';
} else if ($svg == 'configuratorBlack') {
  $file = './images/configuratorBlack.svg'; 
} else if ($svg == 'configurator') {
  $file = './images/configurator.svg'; 
} else if ($svg == 'usiIntrare') {
  $file = './images/usiIntrare.svg';
} else if ($svg == 'usiBalcon') {
  $file = './images/usiBalcon.svg';
} else if ($svg == 'ferestre') {
  $file = './images/ferestre.svg';
} else if ($svg == 'logoWhite') {
  $file = './images/logoWhite.svg';
} else if ($svg == 'map') {
  $file = './images/map.svg';
}

header('Content-Type: image/svg+xml');
readfile($file);