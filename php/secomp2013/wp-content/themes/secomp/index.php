<?php get_header('home'); ?>
<section id="head">
	<div class="shell">
		<div class="pull-col">
			<div class="col col2 multi">
				<ul style="perspective: 1500px;" id="bb-bookblock" class="slider">
					<?php
						$first = true;
						foreach ($posts as $post) {
					?>
					<li class="bb-item"<?php if ($first) { echo ' style="display: list-item;"'; $first = false; } ?>>
						<div class="holder">
							<header class="section-head">
								<h3><?php echo $post->post_title; ?></h3>
							</header>
							<article class="project project-big">
								<?php
									$img = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large');
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
										echo $post->post_content;
									?>
								</div>
								<div class="clearfix"></div>
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
							foreach ($posts as $post) {
						?>
						<li<?php if ($first) { echo ' class="active"'; $first = false; } ?>><a href="#"><?php echo $post->post_title; ?></a></li>
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