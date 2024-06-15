  <?php get_header(); ?>
		<div class="c-wrap">
			<div class="c-grid">
				<div class="p-contents">
						<?php 
						if(have_posts()):
							while(have_posts()):
								the_post(); ?>
						<div id="post-<?php the_ID(); ?>"<?php post_class(); ?>>
						  <h2 class="post_ttl"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
							<ul class="post_meta">
								<li class="post_meta_item">
									<date class="post_meta_date"><?php echo get_the_date(); ?></date>
								</li>
								<li class="post__meta__item"><i class="fa fa-folder" aria-hidden="true"><?php the_category(','); ?></i></li>
										<li class="post__meta__item"><i class="fa fa-tag" aria-hidde="true"><?php the_tags('');?></i></li>
									</ul>
									<?php the_post_thumbnail(); ?>
									<?php the_content(); ?>
									<?php $args = array (
										'before' => '<div class="page-split">',
										'after' => '</div>',
										'link_before' => '<span>',
										'link_after' => '</span>',
									);
									wp_link_pages($args);
									?>
						</div>
									<?php endwhile;
								else:
									?>
									<p>表示する記事がありません</p>
									<?php endif; ?>
					</div>
					<?php if($wp_query -> max_num_pages > 1): ?>
				<ul class="p-pagenation">
					<li class="prevpostslink"><?php next_posts_link('Prev'); ?></li>
					<li class="nextpostslink"><?php previous_posts_link('Next'); ?></li>
				</ul>
				<?php endif; ?>
				<?php get_sidebar(); ?>
			</div>
		</div>
<?php get_footer(); ?>