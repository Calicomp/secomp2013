<?php 
    /* 
        Template Name: Contato
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
							<article class="project project-big">
								<div class="text">
									<?php
										if (have_posts()) {
											while (have_posts()) {
												the_post();
												the_content();
											}
										}
										comments_template( '', true );
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
<?php
	include 'includes/colaboradores.php';
?>
<?php get_footer(); ?>