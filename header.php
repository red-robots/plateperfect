<?php
/**
 * The header for theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ACStarter
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<a name="top"></a>
<div id="page" class="site">
	<?php $image = get_field("header_image");?>
	<div class="header-wrapper row-1" >
		<div class="overlay clear-bottom row-1 <?php echo $image? "image-present":"image-absent";?> no-background">
			<div class="background-image" <?php if($image):?>style="background-image: url(<?php echo $image['sizes']['large'];?>);"<?php endif;?>></div><!--.background-image-->
			<div class="row-1">
				<h1 class="logo">
					<a href="<?php bloginfo('url'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="<?php bloginfo('name');?>"></a>
					<a class="hidden" href="<?php bloginfo('url'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/logo2.png" alt="<?php bloginfo('name');?>"></a>
				</h1>
			</div><!--.row-1-->
			<div class="row-2">
				<div class="bars"><i class="fa fa-bars"></i></div><!--.bars-->
				<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
			</div><!--.row-2-->
		</div><!--.overlay-->
		<?php if($image):?>
			<div class="row-2">
				<img src="<?php echo $image['sizes']['large'];?>" alt="<?php echo $image['alt'];?>">
			</div><!--.row-2-->
		<?php endif;?>
	</div><!--.header-wrapper-->

	<div id="content" class="site-content wrapper">
