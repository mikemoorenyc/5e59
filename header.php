<?php
include 'functions.php';

// Include and instantiate the class.
include_once 'Mobile_Detect.php';
$detect = new Mobile_Detect;

//MOBILE DETECTION
if ( $detect->isMobile() ) {
  $mobileClass = 'mobile';
} else {
  $mobileClass = 'desktop';
}


//GET THEME DIRECTORY
global $siteDir;
$siteDir = '';

//GET HOME URL
global $homeURL;
$homeURL = '';

//DECLARE THE SITE TITLE, SAVE A DB QUERY
global $siteTitle;
$siteTitle = '5 East 59th Street';

//DECLARE THE PAGE EXCERPT
global $siteDesc;
$siteDesc = '5 East 59th Street sits in the heart of the Plaza District, NYC’s preeminent shopping and commercial neighborhood, and is located directly across from the iconic Apple cube, believed to be the highest grossing retail store in the world.';
?>
<!DOCTYPE html>
<html lang="en" class="__menu-closed <?php echo $mobileClass;?>">
<head>

<!-- ABOVE THE FOLD CSS -->
<style><?php $inlinecss = file_get_contents($siteDir.'css/main.css'); dirReplacer($inlinecss);?></style>
<!--<link rel="stylesheet" type="text/css" href="//cloud.typography.com/7105354/724868/css/fonts.css" />-->

  <title><?php echo $siteTitle;?></title>

<!-- HERE'S WHERE WE GET THE SITE DESCRIPTION -->
<meta name="description" content="<?php echo $siteDesc;?>" />

<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">



<!-- icons & favicons -->
<link rel="shortcut icon" href="<?php echo $siteDir;?>assets/imgs/icons/favicon.ico" type="image/x-icon" />
<link rel="apple-touch-icon" href="<?php echo $siteDir;?>assets/imgs/icons/apple-touch-icon.png" />
<link rel="apple-touch-icon" sizes="57x57" href="<?php echo $siteDir;?>assets/imgs/icons/apple-touch-icon-57x57.png" />
<link rel="apple-touch-icon" sizes="72x72" href="<?php echo $siteDir;?>assets/imgs/icons/apple-touch-icon-72x72.png" />
<link rel="apple-touch-icon" sizes="76x76" href="<?php echo $siteDir;?>assets/imgs/icons/apple-touch-icon-76x76.png" />
<link rel="apple-touch-icon" sizes="114x114" href="<?php echo $siteDir;?>assets/imgs/icons/apple-touch-icon-114x114.png" />
<link rel="apple-touch-icon" sizes="120x120" href="<?php echo $siteDir;?>assets/imgs/icons/apple-touch-icon-120x120.png" />
<link rel="apple-touch-icon" sizes="144x144" href="<?php echo $siteDir;?>assets/imgs/icons/apple-touch-icon-144x144.png" />
<link rel="apple-touch-icon" sizes="152x152" href="<?php echo $siteDir;?>assets/imgs/icons/apple-touch-icon-152x152.png" />
<!-- For Nokia -->
<link rel="shortcut icon" href="<?php echo $siteDir;?>assets/imgs/icons/apple-touch-icon.png">
<!-- For everything else -->
<link rel="shortcut icon" href="<?php echo $siteDir;?>assets/imgs/icons/favicon.ico">




<!--  STUFF FOR IE8 WILL GET REMOVED ON COMPILATION // REMOVE THIS LINE TO RENDER IT
<!--[if lte IE 8]>
<link rel="stylesheet" href="<?php echo $siteDir;?>/css/expanded.css" />
	<link href='<?php echo $siteDir;?>/css/ie-fixes.css?ts=<?php echo time();?>' rel='stylesheet' type='text/css'>
  	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->


<!-- FACEBOOK TAGS REMOVED ON COMPILATION UNLESS YOU UNCOMMENT-->
<!--
<meta property="og:site_name" content="<?php echo $siteTitle;?>" />
<meta property="og:title" content="<?php echo $siteDesc;?>" />
<meta property="og:type" content="website" />
<meta property="og:url" content="<?php echo $homeURL;?>" />
<meta property="og:image" content="<?php echo $siteDir;?>assets/blue-pin.jpg" />
<meta property="og:description" content="<?php echo $siteDesc;?>" />
-->
<!-- GEO TAGS -->
<meta name="geo.region" content="US-NY" />
<meta name="geo.placename" content="New York" />
<meta name="geo.position" content="40.764232;-73.97222" />
<meta name="ICBM" content="40.764232, -73.97222" />

</head>

<body  id="top">
<div class="snippet hide">
<div itemscope itemtype="http://schema.org/Place">
  <h1><span itemprop="name">5 East 59th Street</span></h1>
  <span itemprop="description"> 5 East 59th Street sits in the heart of the Plaza District, NYC’s preeminent shopping and commercial neighborhood, and is located directly across from the iconic Apple cube, believed to be the highest grossing retail store in the world.</span>
  <div itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
    <span itemprop="streetAddress">5 E 59th St</span>
    <span itemprop="addressLocality">New York</span>,
    <span itemprop="addressRegion">NY</span>
  </div>
</div>
</div>



<div id="css-checker"></div>
<div id="svg-sprite" class="hide">
  <?php include 'assets/svgs.svg';?>
</div>
