<!-- template-parts/content-jackets_and_coats.php -->

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<!-- Display the title of the Jacket/Coat post -->
		<h1 class="entry-title"><?php the_title(); ?></h1>
	</header>

	<div class="entry-meta">
		<!-- Optionally display custom metadata such as the post date, author, etc. -->
		<span class="posted-on"><?php echo get_the_date(); ?></span>
	</div>

	<div class="entry-content">
		<!-- Display the main content of the Jacket/Coat post -->
		<?php the_content(); ?>

		<!-- Optionally display custom fields (e.g., material, size, color) -->
		<?php if ($material = get_post_meta(get_the_ID(), 'material', true)) : ?>
			<p><strong>Material:</strong> <?php echo esc_html($material); ?></p>
		<?php endif; ?>

		<?php if ($size = get_post_meta(get_the_ID(), 'size', true)) : ?>
			<p><strong>Size:</strong> <?php echo esc_html($size); ?></p>
		<?php endif; ?>

		<!-- You can add more custom fields here as needed -->
	</div>

	<!-- Optional: Add a footer or any extra information -->
	<footer class="entry-footer">
		<p>Posted in <?php the_category(', '); ?></p>
	</footer>
</article>