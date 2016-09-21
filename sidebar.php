    <div id="sidebar">
        <div class="content">
            <div class="box">
<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Sidebar Widgets') ) : ?>
                <div class="widget">
                    <?php get_search_form(); ?>
			    </div>
                <div class="widget">
                    <h2><?php _e('Calendar'); ?></h2>
                    <?php get_calendar(); ?>
			    </div>
			    <div class="widget">
    			    <h2><?php _e('Categories'); ?></h2>
    			    <ul>
        			    <?php wp_list_categories(['title_li'=>'']); ?>
    			    </ul>
			    </div>
			    <div class="widget">
    			    <h2><?php _e('Tags'); ?></h2>
    			    <?php wp_tag_cloud(); ?>
			    </div>			    
			    <div class="widget">
    			    <h2><?php _e('Archives'); ?></h2>
    			    <ul>
        			    <?php wp_get_archives(); ?>
    			    </ul>
			    </div>
<?php endif; ?>
            </div>
        </div>
        <a href="#" id="sidebar_toggle"><i class="fa fa-bars fa-3x" aria-hidden="true"></i></a>
    </div>