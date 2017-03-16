<?php if ( is_active_sidebar( 'subsidiary' ) ) : // If the sidebar has widgets. ?>

	<aside <?php hybrid_attr( 'sidebar', 'subsidiary' ); ?>>
		<div class="wrap">
			<?php dynamic_sidebar( 'subsidiary' ); // Displays the subsidiary sidebar. ?>
		</div>
	</aside><!-- #sidebar-subsidiary -->

<?php endif; // End widgets check. ?>