<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ACStarter
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class("template-page"); ?>>
	<header>
		<h1><?php the_title();?></h1>
	</header>
	<?php if(get_the_content()):?>
		<div class="copy">
			<?php the_content();?>
		</div><!--.copy-->
	<?php endif;
	$slider = get_field("slider");
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
	<?php endif;?>
</article><!-- #post-## -->
