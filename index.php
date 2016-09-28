<?php get_header(); ?>
        <div class="content">
<?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
            <div id="post-<?php the_ID(); ?>" <?php post_class( 'project' ); ?>>
                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                <div class="description">
                    <div class="author"> by <?php the_author(); ?></div>
                    <?php the_time('Y/m/d'); ?>
                </div>
<?php if ( has_post_thumbnail() ) { ?>
                <div class="thumb"><?php the_post_thumbnail(); ?></div>
<?php } ?>
                <div>
                	<?php the_content(); ?>
                </div>
            </div>
<?php endwhile; ?>
<?php endif; ?>
        </div>
<?php if ( have_posts() ) { ?>
        <div class="postsnav">
            <div class="next">
                <?php next_posts_link(); ?>
            </div>
            <div class="prev">
                <?php previous_posts_link(); ?>&nbsp;
            </div>
        </div>
<?php } ?>
<?php get_footer(); ?>