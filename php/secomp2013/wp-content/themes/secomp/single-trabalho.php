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
							<header class="section-head" style="display: block !important">
								<h3><?php echo get_the_title(); ?></h3>
							</header>
							<article class="project project-big">
								<div class="text trabalho">
									<p>
										Dia: <?php echo get_field("dia", $post->ID); ?><br />
										Horario: <?php echo get_field("horario", $post->ID); ?><br />
										Local: <a href="http://secomp2013ufs.com.br/wp-content/uploads/2013/12/mapa.jpg" target="_blank" title="Clique para ver o mapa da UFS"><?php echo get_field("local", $post->ID); ?></a>
									</p>
									<br />
									<h4>Resumo</h4>
									<?php
										if (have_posts()) {
											while (have_posts()) {
												the_post();
												the_content();
											}
										}
									?>
									<br /><br />
									<?php
										$umMinistrante = get_field("um_ministrante", $post->ID);
										if (isset($umMinistrante) && ($umMinistrante != false) && ($umMinistrante != 0)) {
									?>
									<h4>Currículo do ministrante</h4>
									<?php
										} else {
									?>
									<h4>Currículos dos ministrantes</h4>
									<?php
										}
										echo get_field("curriculo_ministrantes", $post->ID);
										$tipoTrabalho = get_field("tipo_trabalho", $post->ID);
										if (($tipoTrabalho == 2) || ($tipoTrabalho == '2')) {
											$recursosNecessarios = get_field("recursos_necessarios", $post->ID);
											if (isset($recursosNecessarios) && ($recursosNecessarios != false) && ($recursosNecessarios != "")) {
									?>
									<br /><br />
									<p>
										Caso você queira utilizar seu notebook para realizar o
										minicurso, abaixo está lista dos softwares necessários:
									</p>
									<?php
												echo get_field("recursos_necessarios", $post->ID);
									?>
									<?php
											}
									?>
									<br /><br />
									<?php
											$numero = get_field("numero_maximo_inscritos", $post->ID);
											if (isset($numero) && ($numero != false) && ($numero != 0)) {
									?>
									<i>Número máximo de participantes: <?php echo $numero; ?></i>
									<?php
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