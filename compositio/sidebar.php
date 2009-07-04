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


<div class="menu">
  <h3>Pages</h3>
  <ul>
    <li<?php if ( is_front_page() ) echo ' class="current_page_item"'; ?>><a href="<?php echo get_option('home'); ?>/"><span>Home</span></a></li>
<?php $pages = wp_list_pages('sort_column=menu_order&title_li=&echo=0');
$pages = preg_replace('%<a ([^>]+)>%U','<a $1><span>', $pages);
$pages = str_replace('</a>','</span></a>', $pages);
echo $pages; ?>
  </ul>
<? unset($pages); ?> 
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
