  <footer class="footer clearfix py1 bg-texture-green" role="contentinfo">

    <div class="max-width-2 mx-auto center">
      <div class="copyright">
        <p>&copy; <?php echo date("Y") ?> Field Reporter <span class="bullet">&#9679;</span> <a href="mailto: info@fieldreporter.co" class="btn btn--primary">info@fieldreporter.nl</a></p>
      </div>
    </div>

  </footer>

  <?php if ($page->isHomepage()) echo js('assets/js/vendor/covervid.min.js') ?>
  <?php echo js('assets/build/js/dist/app.min.js') ?>

  <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
              (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

    ga('create', '<?php echo $site->analytics() ?>', 'auto');
    ga('send', 'pageview');

  </script>

</body>
</html>