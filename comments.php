<div class="comment_reply">
<?php if ( is_singular() ) wp_enqueue_script( "comment-reply" ); ?>    
</div>
<div class="comment_form">
<?php comment_form(); ?>
</div>
<div class="comments_list">
<?php wp_list_comments(array('style' => 'div')); ?>
</div>
<div class="comments_page">
<?php paginate_comments_links(); ?>
</div>