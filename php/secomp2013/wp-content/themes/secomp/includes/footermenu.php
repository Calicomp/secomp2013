<ul id="menu-footer-menu" class="menu">
	<li><a href="<?php echo get_option('home'); ?>">Página Inicial</a></li>
	<?php
		$paginas = get_pages(array(
			'sort_order' => 'ASC',
			'sort_column' => 'menu_order',
			'parent' => false
		));
		foreach ($paginas as $pagina) {
	?>
	<li><a href="<?php echo get_page_link($pagina->ID); ?>"><?php echo $pagina->post_title; ?></a></li>
	<?php
		}
		unset($paginas);
	?>
</ul>