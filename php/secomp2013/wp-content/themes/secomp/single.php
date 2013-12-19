<?php 
    /* 
        Template Name: Modelo de Página
    */ 
?>
<?php get_header(); ?>
<section id="head">
	<div class="shell">
		<div class="pull-col">
			<div class="col col2">
				<ul style="perspective: 1500px;" class="slider" id="bb-bookblock">
					<li style="display: list-item;" class="bb-item">
						<div class="holder">
							<header class="section-head">
								<h3><?php echo get_the_title(); ?></h3>
							</header>
							<article class="project project-big">
								<div class="text">
									<?php
										if (have_posts()) {
											while (have_posts()) {
												the_post();
												the_content();
											}
										}
									?>
								</div>
							</article>
						</div>
					</li>
				</ul>
			</div>
		</div>
		<div class="cl">&nbsp;</div>
	</div>
</section>
<?php get_footer(); ?>
