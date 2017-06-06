<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ACStarter
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="row-1">
			<?php $facebook_link = get_field("facebook_link","option");
			$instagram_link = get_field("instagram_link","option");
			if($facebook_link):?>
				<a href="<?php echo $facebook_link;?>">
					<i class="fa fa-facebook"></i>
				</a>
			<?php endif;
			if($instagram_link):?>
				<a href="<?php echo $instagram_link;?>">
					<i class="fa fa-instagram"></i>
				</a>
			<?php endif;?>
		</div><!--.row-1-->
		<div class="row-2">
			<?php $address_line_1 = get_field("address_line_1","option");
			$address_line_2 = get_field("address_line_2","option");
			$telephone = get_field("telephone","option");
			$fax = get_field("fax","option");
			$telephone_prefix = get_field("telephone_prefix","option");
			$fax_prefix = get_field("fax_prefix","option");
			$copyright = get_field("copyright","option");?>
			<?php if($address_line_1):?>
				<div class="address-line-1">
					<?php echo $address_line_1;?>
				</div><!--.address-line-1-->
			<?php endif;
			if($address_line_2):?>
				<div class="address-line-2">
					<?php echo $address_line_2;?>
				</div><!--.address-line-2-->
			<?php endif;
			if($telephone):?>
				<div class="telephone">
					<?php if($telephone_prefix) echo $telephone_prefix."&nbsp;";?>
					<a href="tel:<?php echo preg_replace("/[^0-9]/","",$telephone);?>">
						<?php echo $telephone;?>
					</a>
				</div><!--address-line-1-->
			<?php endif;
			if($fax):?>
				<div class="fax">
					<?php if($fax_prefix) echo $fax_prefix."&nbsp;";?>
					<?php echo $fax;?>
				</div><!--address-line-1-->
			<?php endif;
			if($copyright):?>
				<div class="copyright">
					<?php echo $copyright;?>
				</div><!--.copyright-->
			<?php endif;?>
		</div><!--.row-2-->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
