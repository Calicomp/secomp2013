
<ul id="menu-main-menu<?php if ($mobile) { echo '-1'; }?>" class="menu">
	<li><a href="<?php echo get_option('home'); ?>">Página Inicial</a></li>
	<?php
		$paginas = get_pages(array('sort_order' => 'ASC', 'sort_column' => 'menu_order', 'parent' => false));
		foreach ($paginas as $pagina) {
			$subpaginas = get_pages(array('sort_order' => 'ASC', 'sort_column' => 'menu_order', 'child_of' => $pagina->ID));
	?>
	<li<?php if (sizeof($subpaginas) != 0) { echo ' class="has-dd"'; } ?>><a href="<?php echo get_page_link($pagina->ID); ?>"><?php echo $pagina->post_title; ?></a><?php
		if (sizeof($subpaginas) != 0) { 
	?>		
		<ul>
	<?php
			foreach ($subpaginas as $subpagina) {
	?>
		<li><a href="<?php echo get_page_link($subpagina->ID); ?>"><?php echo $subpagina->post_title; ?></a></li>
	<?php
			}
	?>
		</ul>
	<?php
		}
	?></li>
	<?php
		}
		unset($paginas);
	?>
</ul>