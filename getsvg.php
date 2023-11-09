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
} else if ($svg == 'headerContact') {
  $file = './images/headerContact.svg';
} else if ($svg == 'contactOfices') {
  $file = './images/contactOfices.svg';
} else if ($svg == 'contactPhone') {
  $file = './images/contactPhone.svg';
} else if ($svg == 'contactEmail') {
  $file = './images/contactEmail.svg';
} else if ($svg == 'europe') {
  $file = './images/europe.svg';
} else if ($svg == 'pvcHeader') {
  $file = './images/pvcHeader.svg';
} else if ($svg == 'architects_banner') {
  $file = './images/architects_banner.svg';
} else if ($svg == 'inst_banner-head') {
  $file = './images/inst_banner-head.svg';
} else if ($svg == 'durable-hero') {
  $file = './images/durable-hero.svg';
} else if ($svg == 'terms') {
  $file = './images/terms.svg';
} 


header('Content-Type: image/svg+xml');
readfile($file);