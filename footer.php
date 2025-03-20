<footer>
    <div class="container">
        <div class="row">
            <div class="copyright col-sm-7 col-4">
                <p>Copyright</p>
            </div>
            <nav class="footer-menu col-sm-5 col-8 text-end">
                <?php wp_nav_menu(array('theme_location' => 'my_footer_menu')) ?>
            </nav>
        </div>
    </div>
</footer>
<script type="text/javascript"
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js?ver=5.3.3" id="bootstrap-js-js">
</script>
<?php wp_footer(); ?>
</body>

</html>