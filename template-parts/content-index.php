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
		<div class="flexslider row-1">
			<ul>
				<?php foreach($slider as $row):?>
					<?php if($row['image']):?>
						<li class="slide">
							<img src="<?php echo $row['image']['sizes']['large'];?>" alt="<?php echo $row['image']['alt'];?>">
						</li>
					<?php endif;?>
				<?php endforeach;?>
			</ul>
		</div><!--.flexslider-->
	<?php endif;?>
	<?php $page_picker = get_field("page_picker");
	if($page_picker):?>
		<div class="row-2">
			<?php foreach($page_picker as $row):?>
				<?php if($row['page']):?>
					<div class="outer-wrapper">
						<div class="inner-wrapper">
							<a href="<?php echo get_the_permalink($row['page']->ID);?>">
								<?php echo $row['page']->post_title;?>
							</a>
						</div><!--.inner-wrapper-->
					</div><!--.outer-wrapper-->
				<?php endif;?>
			<?php endforeach;?>
		</div><!--.row-2-->
	<?php endif;?>
</article><!-- #post-## -->
