<?php get_header(); ?>
        <div class="content">
<?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
            <div class="project">
                <h2><?php the_title(); ?></h2>
                <div>
                	<?php the_content(); ?>
                </div>
                <div class="info">
                    <?php edit_post_link('Edit','','');?>
                </div>
            </div>
<?php endwhile; ?>
<?php else: ?>
<?php _e('Not Found', 'purely');?>
<?php endif; ?>
        </div>
<?php get_footer(); ?>