<div class="SR">

<!-- Start Search -->
<div class="search">
  <form method="get" action="<?php bloginfo('url'); ?>/">
   <fieldset>
   <input type="text" value="<?php the_search_query(); ?>" name="s" /><button type="submit">Search</button>
   </fieldset>
  </form>
<div class="syn">
 <ul>
  <li><a href="<?php bloginfo('rss2_url'); ?>">Entries</a> (RSS)</li>
  <li><a href="<?php bloginfo('comments_rss2_url'); ?>">Comments</a> (RSS)</li>
 </ul>
</div>
</div>
<!-- End Search -->

<!-- Start About This Blog -->
<div class="about">
<h3>About this blog</h3>
<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Quisque sed felis. Aliquam sit amet felis. Mauris semper, velit semper laoreet dictum, quam diam dictum urna, nec placerat elit nisl in quam. Etiam augue pede, molestie eget, rhoncus at, convallis ut, eros. Aliquam pharetra.</p>
</div>
<!-- End About This Blog -->


<div class="categs">
  <div> 
	<h3>Categories</h3> 
	 <ul> 
		<?php wp_list_categories('show_count=1&title_li='); ?> 
	</ul> 
	</div>
	<div style="margin-left: 10px;">
	 <h3>Archives</h3>
	  <ul>
	   <?php wp_get_archives('type=monthly'); ?>
	  </ul>
	</div>
</div>


<!-- Start Recent Comments/Articles -->
<div class="recent">
 <ul class="tabs">
  <li><a class="active" href="#tab-comments">Recent Comments</a></li>
  <li><a href="#tab-posts">Recent Posts</a></li>
  <li><a style="margin-right:0px;" href="#tab-tags">Tags</a></li>
 </ul>
 <ul id="tab-comments">
  <?php dp_recent_comments(5); ?>
 </ul> 
 <ul id="tab-posts">
 <?php $posts = get_posts("numberposts=10&orderby=post_date&order=DESC"); foreach($posts as $post) : ?>	
  <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
 <?php endforeach; ?>
 </ul>
 <div id="tab-tags">
  <?php wp_tag_cloud(''); ?>
 </div>
</div>
<!-- End Recent Comments/Articles -->


<?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar(1) ) : else : ?>
<?php endif; ?>
</div>
<!-- End SideBar1 -->
