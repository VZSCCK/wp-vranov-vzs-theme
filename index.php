<?php get_header(); ?>

    <div class="main-content">
      	<h1>Nejnovější články</h1>
		<?php 
		global $post;
		$myposts = get_posts('numberposts=5&category=3&order=date&no_found_rows=true');
		foreach($myposts as $post) : setup_postdata($post);?>
		<article role="article">
			<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
			<?php the_content();?>
		</article>
		<?php endforeach; ?>

		<p class="right"><a href="<?php echo get_category_link(3); ?>">všechny články</a></p>
	</div>

<?php get_footer(); ?>