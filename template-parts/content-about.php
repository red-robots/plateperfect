<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ACStarter
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class("template-about"); ?>>
	<header>
		<h1><?php the_title();?></h1>
	</header>
	<?php if(get_the_content()):?>
		<div class="copy">
			<?php the_content();?>
		</div><!--.copy-->
	<?php endif;
	$args = array(
		'post_type'=>'team',
		'post_per_page'=>-1,
		'orderby'=>'menu_order',
		'order'=>'ASC'
	);
	$query = new WP_Query($args);
	if($query->have_posts()):?>
		<div class="team clear-bottom">
			<?php $i=0; 
			while($query->have_posts()):$query->the_post();?>
				<?php $image = get_field("image");
				$title = get_field("title");
				$email = get_field("email");
				$phone = get_field("phone");
				if($image):?>
					<div class="member js-blocks <?php if($i%3==0) echo "first";?> <?php if(($i - 2) % 3===0) echo "last";?>">
						<img src="<?php echo $image['sizes']['large'];?>" alt="<?php echo $image['alt'];?>">
						<header>
							<h2><?php the_title();?>
						</header>
						<div class="title"><?php echo $title;?></div><!--.title-->
						<div class="email"><a href="mailto:<?php echo $email;?>"><?php echo $email;?></a></div><!--.title-->
						<div class="phone"><a href="tel:+1<?php echo preg_replace('/[^0-9]/','',$phone);?>"><?php echo $phone;?></a></div><!--.title-->
					</div><!--.member-->
					<?php $i++;
				endif;?>
			<?php endwhile;?>
		</div><!--.team-->
		<?php wp_reset_postdata();
	endif;?>
</article><!-- #post-## -->
