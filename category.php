<?php get_header(); ?>

            <div class="main-content">              
              
                <h1><?php echo single_cat_title('', true); ?></h1>

                  <ul class="news-list">
                  <?php while ( have_posts() ) : the_post(); ?>
                	<li>
		                <a href="<?php the_permalink(); ?>" class="news-list-link">
		                  <strong class="title"><?php the_title(); ?></strong>
		                  <span class="perex"><?php custom_length_excerpt(20); ?></span>
		                </a>
		              </li>
                  <?php endwhile; ?>
                  </ul>  
                
            </div>

<?php get_footer(); ?>