<?php get_header(); ?>
<!-- index.php -->
	<main role="main">
		<!-- section -->

		<section class="articles">

		<h1 class="blog-title">Trainee WordPress Developer</h1>
		<p>Hi, I'm Romy. I'm a Trainee WordPress Developer working at Pragmatic in Brighton, UK. This is a blog of my learning and experiences in Web and WordPress Development.</p>

		<div>
		    <ul>
                <li><a href="img/RV-logo-square.jpg"><img src="img/RV-logo-square.jpg"></a></li>
                <li><a href="img/RV-logo-square.jpg"><img src="img/RV-logo-square.jpg"></a></li>
                <li><a href="img/RV-logo-square.jpg"><img src="img/RV-logo-square.jpg"></a></li>
            </ul>
        </div>

			<?php get_template_part('loop'); ?>

			<?php get_template_part('pagination'); ?>

		</section>
		<!-- /section -->
	</main>

<?php //get_sidebar(); ?>

<?php get_footer(); ?>


