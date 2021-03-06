<?php get_header(); ?>


<?php if (have_posts()) : ?>
<h2 class="title"><strong>Search Results</strong></h2>

<?php include("nav.php"); ?>

<?php while (have_posts()) : the_post(); ?>
<div <?php post_class(); ?> style="margin-bottom: 40px;" id="post-<?php the_ID(); ?>">

<div class="p-head">
<h3><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
<p class="p-cat">In: <?php the_category('|') ?></p>
<small class="p-time">
<strong class="day"><?php the_time('j') ?></strong>
<strong class="month"><?php the_time('M') ?></strong>
<strong class="year"><?php the_time('Y') ?></strong>
</small>
</div>

<div class="p-con">
<?php the_excerpt() ?>
</div>

<div class="p-det">
 <ul>
   <li class="p-det-com"><?php comments_popup_link('No Comments', '1 Comment', '% Comments'); ?></li>
  <?php if (function_exists('the_tags')) { ?> <?php the_tags('<li class="p-det-tag">Tags: ', ', ', '</li>'); ?> <?php } ?>
</ul>
</div>

</div>

<?php endwhile; ?>
<br />
<?php include("nav.php"); ?>
<?php else : ?>

<h2 class="title">Not Found</h2>

<?php endif; ?>
<?php get_footer(); ?>