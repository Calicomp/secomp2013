<?php 
    /* 
        Template Name: Página de Contato
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
											the_post();
									?>
									<div id="comments">
										<div id="respond" class="comment-respond">
											<h2 id="comments" class="dotted-line-title">
												<span>
													<?php
														the_title();
													?>
												</span>
											</h2>
											<br />
											<?php
												the_content();
											?>
										</div>
									</div>
									<?php
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
<?php
	include 'includes/colaboradores.php';
?>
<?php get_footer(); ?>