<?php /* Template Name: Contact Page */ get_header(); ?>

<div class="form">
	<h1>Contact Me</h1>
	<?php if( function_exists( 'ninja_forms_display_form' ) ){ ninja_forms_display_form( 1 ); } ?>
</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
