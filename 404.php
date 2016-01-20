<?php get_header(); ?>

<section id="content" class="not-found">
	<header class="single-post-header">
		<div class="container">
			<div class="twelve columns">
				<h1><?php _e('Ops, 404 <br> Página não encontrada <br> =)', 'jeo'); ?></h1>
			</div>
		</div>
	</header>
	<div class="container">
		<div class="eight columns">
			<p>Melhor coisa a fazer é voltar para a página inicial:</p>
			<h2><a style="bold" href="http://saneamentobahia.org">Página inicial</a></h2>
		</div>
		<div class="three columns offset-by-one">
			<aside id="sidebar">
				<ul class="widgets">
					<?php dynamic_sidebar('general'); ?>
				</ul>
			</aside>
		</div>
	</div>
</section>

<?php get_footer(); ?>