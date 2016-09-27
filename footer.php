    </div>
<?php get_sidebar(); ?>
    <footer id="footer">
        <div class="content">
            <?php wp_nav_menu(array('theme_location'=>'footer'));?>
            <ul id="copyright">
                <li>Theme: <a href="https://hsin.tw">Hsin</a></li>
                <li>Images: <a href="https://unsplash.com">Unsplash</a></li>
            </ul>
        </div>
    </footer>
<style>
#header {
    background-image: url(<?php echo purely_get_header_img(); ?>);
}
</style>
<script>
$(function(){
    $(document).on('click', '#sidebar_toggle', function(){
        var t = $('#sidebar');
    	if (t.css('right') == '0px') {
            t.animate({"right": '-' + t.width() + 'px'}, 300);
    	} else {
            t.animate({"right": '0px'}, 300);
    	}
    });
});
</script>
<?php wp_footer(); ?>
</body>
</html>