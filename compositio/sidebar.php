<div class="SR">

<div class="search">
  <form method="get" action="<?php bloginfo('url'); ?>/">
    <fieldset>
      <input type="text" value="<?php the_search_query(); ?>" name="s" /><button type="submit">Search</button>
    </fieldset>
  </form>

  <div class="syn">
    <ul>
      <li><a href="<?php bloginfo('rss2_url'); ?>">Subscribe to RSS feed</a></li>
    </ul>
  </div>
</div>


<div class="about">
  <h3>About this blog</h3>
  <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Quisque sed felis. Aliquam sit amet felis. Mauris semper, velit semper laoreet dictum, quam diam dictum urna, nec placerat elit nisl in quam. Etiam augue pede, molestie eget, rhoncus at, convallis ut, eros. Aliquam pharetra.</p>
</div>


<div class="categs">
  <h3>Categories</h3>
  <ul>
    <?php wp_list_categories('title_li='); ?>
  </ul>
</div>

<div class="categs">
  <h3>Archives</h3>
  <ul>
    <?php wp_get_archives('type=monthly'); ?>
  </ul>
</div>


<?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar(1) ) : else : ?>
<?php endif; ?>
</div>
<!-- End SideBar1 -->
