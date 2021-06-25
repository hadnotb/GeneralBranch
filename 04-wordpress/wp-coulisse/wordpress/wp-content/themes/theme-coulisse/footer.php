<footer class="siteFooter">
<?php if(has_nav_menu('footer-menu')){
        wp_nav_menu( array(
            'theme_location' => 'footer-menu',
            'container' => 'footer-nav',
            'container-class' => 'banner-menu',
        ));
    }?>
</footer>
<?php wp_footer() ; ?> 
</body>
</html>