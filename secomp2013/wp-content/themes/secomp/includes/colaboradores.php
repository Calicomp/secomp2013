<?php
	function gerarTiposColaboratores($tipo, $numeroTipo) {
		$colaboradores = get_posts(array(
			"posts_per_page" => -1,
			"post_type" => "colaborador",
			"meta_query" => array(
				0 => array(
					"key" => "tipo",
					"value" => $numeroTipo
				)
			),
			"meta_key" => "ordem",
			"orderby" => "meta_value_num",
			"order" => "ASC"
		));
		$lengthPatrocinadores = sizeof($colaboradores);
		if ($lengthPatrocinadores > 0) {
?>
	<div class="page-widgets">
		<h4 style="color: #000"><?php echo $tipo; ?></h4>
	</div>
	<div class="page-widgets">
		<?php
			for ($i = 0; $i < $lengthPatrocinadores; $i = $i + 1) {
				showColaborador($colaboradores[$i], $i, $numeroTipo);
			}
		?>
		<div class="cl"></div>			
	</div>
<?php
		}
	}
	function showColaborador($colaborador, $cont, $tipo) {
		$img = wp_get_attachment_image_src( get_post_thumbnail_id($colaborador->ID), 'large');
?>
	<div class="col<?php if ((($cont + 1) % 4) == 0) { echo ' col-last'; } ?>">
		<div class="widget <?php
			if ($tipo == 1) {
				echo 'patrocinio';
			} else if ($tipo == 2) {
				echo 'apoio';
			} else {
				echo 'organizacao';
			}
		?>">
			<div rel="2">
				<a href="<?php echo get_field("site", $colaborador->ID); ?>" title="<?php echo $colaborador->post_title; ?>" target="_blank">
					<img src="<?php echo $img[0]; ?>" alt="<?php echo $colaborador->post_title; ?>" />
				</a>
			</div>
		</div>
	</div>
<?
	}
?>
<div id="main">
	<div id="footer-widgets">
		<div class="shell">
			<?php
				gerarTiposColaboratores("Patrocínio", 1);
				gerarTiposColaboratores("Apoio", 2);
				gerarTiposColaboratores("Organização", 3);
			?>
			<div class="page-widgets">
				<h4 style="color: #000">Redes Sociais</h4>
			</div>
			<div class="page-widgets">
				<iframe src="//www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2FSECOMPUFS2013&amp;width=400&amp;height=290&amp;colorscheme=light&amp;show_faces=true&amp;header=true&amp;stream=false&amp;show_border=false&amp;appId=727993100549100" class="facebook-box"></iframe>
				<!--<iframe src="//www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2FSECOMPUFS2013&amp;width=940&amp;height=220&amp;colorscheme=light&amp;show_faces=true&amp;header=true&amp;stream=false&amp;show_border=false&amp;appId=727993100549100" scrolling="no" frameborder="0" class="facebook-box" allowTransparency="true"></iframe>-->
				<div class="twitter-box">
					<a class="twitter-timeline" href="https://twitter.com/Secomp_2013" data-widget-id="379972050279858176">Tweets de @Secomp_2013</a>
					<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
				</div>
			</div>
		</div>
	</div>
</div>