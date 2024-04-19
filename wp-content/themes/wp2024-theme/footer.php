<?php
global $theme_uri;
?>
<footer class="footer spad">
        <div class="container">
            <?php
        get_template_part('template-parts/footer/footer','widgets');
        get_template_part('template-parts/footer/footer','bottom'); 
          ?>
        </div>
    </footer>
    <?php wp_footer(); ?>
</body>

</html>