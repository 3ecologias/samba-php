<?php get_header('single'); ?>

<?php if(have_posts()) : the_post(); ?>
	<section id="content_page">
		<header class="page-post-header">
			<div class="container_page">
				<!-- <div class="twelve columns">
					<h1><?php the_title(); ?></h1>
				</div> -->
			</div>
		</header>
		<div class="container_page">
			<div class="col-md-8">
				<?php the_content(); ?>
			</div>
			<div class="one columns offset-by-one">
				<aside id="sidebar">
					<ul class="widgets">
						<?php dynamic_sidebar('general'); ?>
					</ul>
				</aside>
			</div>
		</div>
	</section>
<?php endif; ?>

<?php get_footer(); ?>