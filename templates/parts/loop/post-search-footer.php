<?php
/**
 * This post footer template is displayed for search results and has modified output.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package basis
 */
?>
<footer class="entry-footer">
	<?php if ( 'post' == get_post_type() ) : // Hide category and tag text for pages on Search ?>
		<?php
			/* translators: used between list items, there is a space after the comma */
			$categories_list = get_the_category_list( __( ', ', 'basis' ) );
			if ( $categories_list && basis_categorized_blog() ) :
		?>
		<span class="cat-links">
			<?php printf( __( 'Posted in %1$s', 'basis' ), $categories_list ); ?>
		</span>
		<?php endif; // End if categories ?>

		<?php
			/* translators: used between list items, there is a space after the comma */
			$tags_list = get_the_tag_list( '', __( ', ', 'basis' ) );
			if ( $tags_list ) :
		?>
		<span class="tags-links">
			<?php printf( __( 'Tagged %1$s', 'basis' ), $tags_list ); ?>
		</span>
		<?php endif; // End if $tags_list ?>
	<?php endif; // End if 'post' == get_post_type() ?>

	<?php if ( ! post_password_required() && ( comments_open() || '0' != get_comments_number() ) ) : ?>
	<span class="comments-link"><?php comments_popup_link( __( 'Leave a comment', 'basis' ), __( '1 Comment', 'basis' ), __( '% Comments', 'basis' ) ); ?></span>
	<?php endif; ?>

	<?php edit_post_link( __( 'Edit', 'basis' ), '<span class="edit-link">', '</span>' ); ?>
</footer><!-- .entry-footer -->
