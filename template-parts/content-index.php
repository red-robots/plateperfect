<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ACStarter
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class("template-index"); ?>>
	<?php $slider = get_field("slider");
	if($slider):?>
		<div class="flexslider">
			<ul>
				<?php foreach($slider as $row):?>
					<li class="slide"></li>
				<?php endforeach;?>
			</ul>
		</div><!--.flexslider-->
	<?php endif;?>
</article><!-- #post-## -->
