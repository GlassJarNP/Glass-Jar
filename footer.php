<footer>
  <div class="container clearfix">
  	<?php  dynamic_sidebar( 'footer-nav' ); ?>
  	<div class="footer-footer clearfix">
  		<div class="footer-logo">
  			<img src="images/full-logo.png" alt="">
  		</div>
  		<div class="footer-copy">
    		<p>&copy;<?php echo date('Y'); ?> GlassJar Scholarships</p>
    	</div>
    	<div class="footer-devs">
    		<p>Designed by Emily Catalano.</p>
    		<p>Developed by <a target="_blank" href="http://jeanneschiller.com/">Jeanne Schiller</a> &amp <a target="_blank" href="http://timjackwilkins.com/">Tim Jack Wilkins</a>.</p>
    	</div>
    </div>
  </div>
</footer>

<script>
/* Google Analytics! */
 var _gaq=[["_setAccount","UA-XXXXX-X"],["_trackPageview"]]; // Change UA-XXXXX-X to be your site's ID
 (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];g.async=1;
 g.src=("https:"==location.protocol?"//ssl":"//www")+".google-analytics.com/ga.js";
 s.parentNode.insertBefore(g,s)}(document,"script"));
</script>

<?php wp_footer(); ?>
</body>
</html>