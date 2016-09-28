<?php
/** * The template for displaying all single posts and attachments 
* * @package WordPress 
* @subpackage purely 
* @since purely 1.0.0 */
?>
<?php get_header(); ?>
        <div class="content">
<?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
            <div class="project">
                <h2><?php the_title(); ?></h2>
                <div class="description">
                    <div class="author"> by <?php the_author(); ?></div>
                    <?php the_time('Y/m/d'); ?>
                </div>
                <div>
                	<?php the_content(); ?>
                </div>
                <div class="info">
                    <span><?php the_category(' , '); ?></span><span> / </span>
                    <span>tags: <?php the_tags('', ' , ',''); ?></span>
                    <?php edit_post_link('Edit','/ ','');?>
                </div>
            </div>
<?php endwhile; ?>
<?php else: ?>
<?php _e('Not Found', 'purely');?>
<?php endif; ?>
        </div>
        <div class="nav">
            <div class="next">
                <?php next_post_link(); ?>
            </div>
            <div class="prev">
                <?php previous_post_link(); ?>&nbsp;
            </div>
            
        </div>
        <div class="comments">
            <?php  comments_template(); ?>
        </div>
<?php get_footer(); ?>