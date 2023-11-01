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
} else if ($svg == 'pointOfSale') {
  $file = './images/pointOfSale.svg';
} else if ($svg == 'ofices') {
  $file = './images/ofices.svg';
} else if ($svg == 'eu') {
  $file = './images/eu.svg';
} else if ($svg == 'production') {
  $file = './images/production.svg';
} else if ($svg == 'hartaProduction') {
  $file = './images/hartaProduction.svg';
} else if ($svg == 'offices') {
  $file = './images/offices.svg';
}

header('Content-Type: image/svg+xml');
readfile($file);