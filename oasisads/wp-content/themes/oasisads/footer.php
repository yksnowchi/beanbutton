<?php
/*
 * footer.php
 */
?>

<br class="clearfix">

<div id="footer">
   		<div class="container">
   			<div class="add-nav">
   				<ul><?php wp_list_pages('sort_column=menu_order&depth=1&title_li='); ?></ul>		
   			</div>
   		<div class="container">
   			<div id="copy">Copyright@ <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. All Right Reserved</div>
   		</div>
   </div><!--.footer-->
  
  
  <!-- JavaScript at the bottom for fast page loading -->

  <!-- Grab Google CDN's jQuery, with a protocol relative URL; fall back to local if offline -->
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="js/libs/jquery-1.7.1.min.js"><\/script>')</script>

  <!-- scripts concatenated and minified via build script -->
   <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/plugins.js"></script>
   <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/script.js"></script>
		
  <!-- end scripts -->

  <!-- Asynchronous Google Analytics snippet. Change UA-XXXXX-X to be your site's ID.
       mathiasbynens.be/notes/async-analytics-snippet -->
  <script>
    var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
    (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
    g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
    s.parentNode.insertBefore(g,s)}(document,'script'));
  </script>
  <?php wp_footer(); ?>
</body>
</html>