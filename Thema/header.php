<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title><?php bloginfo('name'); ?></title>
  <link rel="stylesheet" href="style.css">
  <?php wp_head(); ?>
</head>
<body>
<DIV id="container">
  <DIV id="header">
    <DIV id="logo">
		<h1><?php bloginfo('name'); ?></h1>
    </DIV>
  </DIV>
  <DIV id="menubalk">
    <?php
	$opties = array(
	'container_class' => 'menu',
	'theme_location' => 'hoofdmenu'
	);
	wp_nav_menu( $opties );
	?>
  </DIV>