<?php 

$svg = $_GET['svg'];

if($svg == 'logo') {
  $file = './images/logo.svg';
} else if ($svg == 'configurator') {
  $file = './images/configurator.svg'; 
} else if ($svg == 'usiIntrare') {
  $file = './images/usiIntrare.svg';
} else if ($svg == 'usiDeBalcon') {
  $file = './images/usiDeBalcon.svg';
} else if ($svg == 'ferestre') {
  $file = './images/ferestre.svg';
}

header('Content-Type: image/svg+xml');
readfile($file);