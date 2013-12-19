<?php 
    /* 
        Template Name: Subpaginas
    */ 
?>
<?php get_header(); ?>
<section id="head">
	<div class="shell">
		<div class="pull-col">
			<div class="col col2 multi">
				<ul style="perspective: 1500px;" class="slider" id="bb-bookblock">
					<?php
						$nomeCategoria = get_post_meta(get_the_ID(), "categoria");
						$subpaginas = get_posts(array(
							'category' => get_term_by("name", $nomeCategoria[0], "category")->term_id
						));
						$first = true;
						foreach ($subpaginas as $subpagina) {
					?>
					<li class="bb-item<?php if ($first) { echo ' style="display: list-item;"'; $first = false; } ?>">
						<div class="holder">
							<header class="section-head">
								<h3><?php echo $subpagina->post_title; ?></h3>
							</header>
							<article class="project project-big">
								<?php
									$img = wp_get_attachment_image_src( get_post_thumbnail_id($subpagina->ID), 'large');
									if ($img) {
								?>
								<div class="image">
									<img src="<?php echo $img[0]; ?>" alt="" />
								</div>
								<?php
									}
								?>
								<div class="text">
									<?php
										echo $subpagina->post_content;
									?>
								</div>
							</article>
						</div>
					</li>
					<?php
						}
						$first = true;
					?>
				</ul>
			</div>
			<div class="col col3 bookblock-nav">
				<nav>
					<ul>
						<?php
							foreach ($subpaginas as $subpagina) {
						?>
						<li<?php if ($first) { echo ' class="active"'; $first = false; } ?>><a href="#"><?php echo $subpagina->post_title; ?></a></li>
						<?php
							}
						?>
					</ul>
				</nav>
			</div>
		</div>
		<div class="cl">&nbsp;</div>
	</div>
</section>
<?php
	include 'includes/colaboradores.php';
?>
<?php get_footer(); ?>