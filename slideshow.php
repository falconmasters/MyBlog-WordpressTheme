			<section id="slideshow">
				<?php // query_posts('category_name=slider'); ?>
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				
				<div class="slide">
					<div class="thumb">
						<a href="<?php the_permalink();?>"><?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'slider_thumbs' ); } ?></a>
					</div>
					<article>
						<hgroup><h2><a href="<?php the_permalink();?>"><?php the_title();?></a></h2></hgroup>
						<p class="date"><?php the_date();?> en <?php the_category();?></p>
						<p class="extract"><?php the_excerpt();?></p>
					</article>
				</div>

				<?php endwhile; else: ?>
				<h1>No se encontraron articulos</h1>
				<?php endif; ?>
			</section>