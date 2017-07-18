<?php get_header(); ?>

	<section class="container <?php if( is_shop() || is_product_category() ) { echo 'shop-container'; } ?>">
		<?php if( (is_shop() || is_product_category()) && is_active_sidebar( 'shop' ) ): ?>
			<aside id="sidebar">
				<?php dynamic_sidebar( 'shop' ); ?>
			</aside>
		<?php endif; ?>

		<div class="woocommerce-store">
			<?php woocommerce_content(); ?>
		</div>
	</section>

<?php get_footer();
