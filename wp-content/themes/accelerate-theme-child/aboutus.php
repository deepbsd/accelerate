<?php  /* Template Name: aboutus */
/**
 * The template for displaying the about page for accelerate
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 1.0
 */

get_header(); ?>
<div class="about-page">
	<div class="site-content">

			<?php while ( have_posts() ) : the_post();
				$image1 = get_field('img1');
				$service_title1 = get_field('service_title_1');
				$service_description1 = get_field('service_description1');
				$image2 = get_field('img2');
				$service_title2 = get_field('service_title_2');
				$service_description2 = get_field('service_description2');
				$image3 = get_field('img3');
				$service_title3 = get_field('service_title_3');
				$service_description3 = get_field('service_description3');
				$image4 = get_field('img4');
				$service_title4 = get_field('service_title_4');
				$service_description4 = get_field('service_description4');  ?>

				<div class="aboutus">
				<?php the_content(); ?>

				<h1 class="about-h1">Accelerate is a strategy and marketing agency located in the heart of NYC. Our goal is to build businesses by making our clients visible and making their customers smile.</h1>

				<h3 class="about-h3">Our Services</h3>

				<div class="about-services-p">We take pride in our clients and the services we create for them. Here's a brief overview of our offered services.</div>

				<br>

			<div class="sub-about">
				<img src="<?php echo $image1; ?>" class="float-left1" />
				<p class="service-title"><?php echo $service_title1; ?></p>
				<p><?php echo $service_description1; ?></p>
			</div>

			<div class="sub-about">
				<img src="<?php echo $image2; ?>" class="float-right"/>
				<p class="service-title"><?php echo $service_title2; ?></p>
				<p><?php echo $service_description2; ?></p>
			</div>

			<div class="sub-about">
				<img src="<?php echo $image3; ?>" class="float-left2"/>
				<p class="service-title"><?php echo $service_title3; ?></p>
				<p><?php echo $service_description3; ?></p>
			</div>

			<div class="sub-about">
			  <img src="<?php echo $image4; ?>" class="float-right"/>
				<p class="service-title"><?php echo $service_title4; ?></p>
				<p><?php echo $service_description4; ?></p>
			</div>

		</div>   <!-- end of about_us -->
		<?php endwhile; // end of the loop. ?>

		</div><!-- #site-content -->
	</div><!-- #about-page -->



<?php get_footer(); ?>
