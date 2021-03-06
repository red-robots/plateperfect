<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ACStarter
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class("template-sitemap"); ?>>
	<header>
		<h1><?php the_title();?></h1>
	</header>
	<div class="copy">
		<?php the_content();?>
		<?php wp_nav_menu( array( 'theme_location' => 'sitemap') ); ?>
	</div><!--.copy-->
	<?php $slider = get_field("slider");
	if($slider):?>
		<div class="flexslider">
			<ul class="slides">
				<?php foreach($slider as $row):?>
					<?php if($row['image']):?>
						<li class="slide">
							<img src="<?php echo $row['image']['sizes']['large'];?>" alt="<?php echo $row['image']['alt'];?>">
						</li>
					<?php endif;?>
				<?php endforeach;?>
			</ul>
		</div><!--.slider-->
	<?php endif;
	if($slider):?>
		<div class="mobile-images">
			<div class="row-1">
				<?php foreach($slider as $row):?>
					<?php if($row['image']):?>
						<img src="<?php echo $row['image']['sizes']['large'];?>" alt="<?php echo $row['image']['alt'];?>">
					<?php endif;?>
				<?php endforeach;?>
			</div><!--.row-1-->
			<div class="row-2 clear-bottom">
				<a href="#top">
					<i class="fa fa-chevron-circle-up"></i>
				</a>
			</div><!--.row-2-->
		</div><!--.mobile-images-->
	<?php endif;?>
</article><!-- #post-## -->
