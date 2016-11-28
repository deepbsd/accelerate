<?php
/**
 * The template for displaying 404 pages (Not Found)
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 1.0
 */

get_header(); ?>


<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">

			<section class="">
				<h1 class="page-title">Page Not Found!  Sorry about that!</h1>
			</section>

		<div class="page-content">
			<img class="e404img" src="http://localhost/~dsj/accelerate/wp-content/uploads/2016/11/awkward_cat.jpg">
			<p><?php _e( '<em><strong>Error 404!</strong></em><br>  It looks like nothing was found at this location. Maybe try a search?', 'accelerate-theme-child' ); ?></p>

			<?php get_search_form(); ?>
		</div><!-- .page-content -->

	</div><!-- #content -->
</div><!-- #primary -->

<?php
get_footer();
