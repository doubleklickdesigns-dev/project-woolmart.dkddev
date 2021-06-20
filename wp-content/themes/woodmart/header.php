<?php
/**
 * The Header template for our theme
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<?php wp_head(); ?>
	<style>
		@media screen and (max-width: 1680px) and (min-width: 1600px) {
			.banner form {
    background: #fff;
    padding: 20px;
    border-radius: 5px;
    position: fixed !important;
    top: 35%;
    transform: translateY(-60%) !important;
    right: calc(46% - 610px) !important;
    z-index: 111 !important;
    width: 450px !important;
    border-bottom: none;
    box-shadow: 0 13px 31px -5px rgb(0 0 0 / 18%);
}
		.interior-b form {
    background: #fff;
    padding: 20px;
    border-radius: 5px;
    position: fixed;
			top: 32%;}
		.sticky {
    z-index: 11;
    position: fixed !important;
    top: 13% !important;
    width: 100% !important;
    left: 0 !important;
    background: #fff;
}
		.floring-tile form  {
     background: #fff;
    padding: 20px;
    border-radius: 5px;
    position: fixed;
			top: 35%;
		}
		.form .wpcf7-form
		{
			top: 40%;
		}
		.ceiling form  {
			top: 35%;
		}
		}
		@media screen and (max-width: 1600px) and (min-width: 1551px) {
	.banner form {
    background: #fff;
    padding: 20px;
    border-radius: 5px;
    position: fixed !important;
		top: 40%;
			}
			
		.floring-tile form  {
     background: #fff;
    padding: 20px;
    border-radius: 5px;
    position: fixed;
			top: 40%;
		}
		.form .wpcf7-form
		{
			top: 52%;
		}
		.ceiling form  {
			top: 40%;
		}
			
		}
	@media screen and (max-width: 1550px) and (min-width: 1400px) {
	.banner form {
    background: #fff;
    padding: 20px;
    border-radius: 5px;
    position: fixed !important;
    top: 54%;
    transform: translateY(-60%) !important;
    right: calc(46% - 610px) !important;
    z-index: 111 !important;
    width: 450px !important;
    border-bottom: none;
    box-shadow: 0 13px 31px -5px rgb(0 0 0 / 18%);
}
		.interior-b form {
    background: #fff;
    padding: 20px;
    border-radius: 5px;
    position: fixed;
			top: 50%;}
		.sticky {
    z-index: 11;
    position: fixed !important;
    top: 22% !important;
    width: 100% !important;
    left: 0 !important;
    background: #fff;
}
		.floring-tile form  {
     background: #fff;
    padding: 20px;
    border-radius: 5px;
    position: fixed;
			top: 54%;
		}
		.form .wpcf7-form
		{
			top: 59%;
		}
		.ceiling form  {
			top:54%;
		}
}
		
		@media screen and (max-width: 1366px) and (min-width: 1200px) {
			.banner form {
    background: #fff;
    padding: 20px;
    border-radius: 5px;
    position: fixed !important;
		top: 56%;
			}
			.interior-b form
			{
				top: 52%;
			}
			
		.floring-tile form  {
     background: #fff;
    padding: 20px;
    border-radius: 5px;
    position: fixed;
			top: 56%;
		}
		.form .wpcf7-form
		{
			top: 62%;
		}
		.ceiling form  {
			top: 56%;
		}
	  .sticky {
    z-index: 11;
    position: fixed !important;
    top: 17% !important;
    width: 100% !important;
    left: 0 !important;
    background: #fff;
}
		}
		@media screen and (max-width: 1250px) and (min-width: 1100px) {
	  .sticky {
    z-index: 11;
    position: fixed !important;
    top: 25% !important;
    width: 100% !important;
    left: 0 !important;
    background: #fff;
}
		}
		@media screen and (max-width: 1100px) and (min-width: 1020px) {
	  .sticky {
    z-index: 11;
    position: fixed !important;
    top: 27% !important;
    width: 100% !important;
    left: 0 !important;
    background: #fff;
}
		
		.banner form {
    background: #fff;
    padding: 20px;
    border-radius: 5px;
    position: fixed !important;
    top: 66%;
    transform: translateY(-60%) !important;
    right: calc(46% - 610px) !important;
    z-index: 111 !important;
    width: 450px !important;
    border-bottom: none;
    box-shadow: 0 13px 31px -5px rgb(0 0 0 / 18%);
}
	
		.floring-tile form  {
     background: #fff;
    padding: 20px;
    border-radius: 5px;
    position: fixed;
			top: 66%;
		}
		.form .wpcf7-form
		{
			top: 66%;
		}
		.ceiling form  {
			top: 66%;
		}
		}
	</style>
</head>

<body <?php body_class(); ?>>

	<?php wp_body_open(); ?>

	<?php do_action( 'woodmart_after_body_open' ); ?>
	
	<div class="website-wrapper">

		<?php if ( woodmart_needs_header() ): ?>

			<!-- HEADER -->
			<?php if ( ! function_exists( 'elementor_theme_do_location' ) || ! elementor_theme_do_location( 'header' ) ) : ?>
				<header <?php woodmart_get_header_classes(); // location: inc/functions.php ?>>
					<?php whb_generate_header(); ?>
				</header><!--END MAIN HEADER-->
			<?php endif ?>

			<?php woodmart_page_top_part(); ?>

		<?php endif ?>
        
