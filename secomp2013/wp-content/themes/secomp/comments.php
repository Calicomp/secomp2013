<?php
	// Do not delete these lines
	if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME'])) {
		die('Please do not load this page directly. Thanks!');
	}
	if (post_password_required()) {
?>
		<p class="nocomments">Este artigo está protegido por password. Insira-a para ver os comentários.</p>
<?php
		return;
	}
?>

<div id="comments">
	<?php if (comments_open()) { ?>
		<div id="respond" class="comment-respond">
			<h3 id="reply-title" class="comment-reply-title"></h3>
			<h2 id="comments" class="dotted-line-title">
				<span>
					<?php
						if (have_posts()) {
							while (have_posts()) {
								the_post();
								the_title();
							}
						}
					?>
				</span>
			</h2>
			<br />
			<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">
				<?php if ($user_ID) { ?>
					<p>Autentificado como <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. <a href="<?php echo wp_logout_url(); ?>" title="Sair desta conta">Sair desta conta &raquo;</a></p>
				<?php } else { ?>
					<p class="comment-form-author">
						<label for="author">Name <span class="required">*</span></label>
						<input id="author" name="author" value="<?php echo $comment_author; ?>" size="30" aria-required="true" type="text" required="required" />
					</p>
					<p class="comment-form-author">
						<label for="email">Email <span class="required">*</span></label>
						<input id="email" name="email" value="<?php echo $comment_author_email; ?>" aria-required="true" type="email" required="required" />
					</p>
				<?php } ?>
					<div class="textarea_wrap"><textarea id="comment" name="comment" cols="45" rows="8" aria-required="true" required="required"></textarea></div>
				<input type="submit" name="submit" id="submit" value="Enviar Mensagem" />
				<?php comment_id_fields(); ?>
				<?php do_action('comment_form', $post->ID); ?>
			</form>
		</div>
	<?php } ?>
</div>