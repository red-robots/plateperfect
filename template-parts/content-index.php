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
	<?php $slider = get_field("slider");?>
	<div class="header-wrapper row-1">
		<div class="overlay clear-bottom row-1 <?php echo $slider? "image-present":"image-absent";?>" <?php if($slider && $slider[0]['image']):?>style="background-image: url(<?php echo $slider[0]['image']['sizes']['large'];?>);"<?php endif;?>>
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
		<?php if($slider):?>
			<div class="flexslider row-2">
				<ul class="slides">
					<?php foreach($slider as $row):?>
						<?php if($row['image']):?>
							<li class="slide">
								<img src="<?php echo $row['image']['sizes']['large'];?>" alt="<?php echo $row['image']['alt'];?>">
							</li>
						<?php endif;?>
					<?php endforeach;?>
				</ul>
			</div><!--.row-2-->
		<?php endif;?>
	</div><!--.header-wrapper-->
	<?php $page_picker = get_field("page_picker");
	if($page_picker):?>
		<div class="row-2 clear-bottom">
			<?php foreach($page_picker as $row):?>
				<?php if($row['page']):
					$post = get_post($row['page']);
					setup_postdata( $post );
					$image = get_field("link_background_image");
					if($image):?>
						<div class="outer-wrapper js-blocks" style="background-image:url(<?php echo $image['sizes']['large'];?>);">
							<a href="<?php echo get_the_permalink();?>">
								<div class="inner-wrapper" >
									<?php the_title();?>
								</div><!--.inner-wrapper-->
							</a>
						</div><!--.outer-wrapper-->
					<?php endif;
					wp_reset_postdata();
				endif;?>
			<?php endforeach;
			$post = get_post(32);
			setup_postdata( $post );
			$image = get_field("link_background_image");
			$text = get_field("subscribe_text");
			if($image && $text):?>
				<div class="outer-wrapper js-blocks" style="background-image:url(<?php echo $image['sizes']['large'];?>);">
					<a href="<?php echo get_the_permalink();?>">
						<div class="inner-wrapper" >
							<?php echo $text;?>	
						</div><!--.inner-wrapper-->
					</a>
				</div><!--.outer-wrapper-->
			<?php endif;
			wp_reset_postdata();?>
		</div><!--.row-2-->
	<?php endif;?>
</article><!-- #post-## -->
