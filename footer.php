</div>

<div id="footer">

  <!-- Footer Links -->
  
  <h5><b>Looking for something else?</b></h5>
  <ul class="elsewhere">
    <?php wp_list_bookmarks('categorize=0&title_li=&category_name=footer&show_images=0'); ?>
  </ul>

  <!-- Search Field -->
  
  <div class="footerContent">

<form method="get" action="<?php bloginfo('url'); ?>/" id="searchform">
  <input name="s" id ="s" type="text" size="40" value="<?php the_search_query(); ?>" placeholder="Search..." />
</form>

<br>   <br>
    <p>Powered by Wordpress, Theme by Pankaj Kumar</p>
    <p>&copy; Pankaj Kumar. All the content unless otherwise stated is licensed to a <a rel="license" href="http://creativecommons.org/licenses/by-nc-sa/3.0/">creative common license</a> <a rel="license" href="http://creativecommons.org/licenses/by-nc-sa/3.0/"><img alt="Creative Commons License" style="border-width:0" src="http://i.creativecommons.org/l/by-nc-sa/3.0/80x15.png" /></a> </p>
  </div>
</div>

<?php wp_footer(); ?>

</body>
</html>
