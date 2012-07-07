<?php get_header(); ?>
<section id="cuerpo">
  <?php if (have_posts()) :?>
  <?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
    <?php /* If this is a category archive */ if (is_category()) { ?>
        <h4 class="pagetitle">Archivos de los &#8216;<?php single_cat_title(); ?>&#8217;</h4>

    <?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
        <h4 class="pagetitle">Posts de &#8216;<?php single_tag_title(); ?>&#8217;</h4>

    <?php /* If this is a daily archive */ } elseif (is_day()) { ?>
        <h4 class="pagetitle">Archivos del <?php the_time('F jS, Y'); ?></h4>

    <?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
        <h4 class="pagetitle">Archivos del <?php the_time('F, Y'); ?></h4>

    <?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
        <h4 class="pagetitle">Archivos del <?php the_time('Y'); ?></h4>

    <?php /* If this is an author archive */ } elseif (is_author()) { ?>
        <4 class="pagetitle">Archivos de autor</h4>

    <?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
        <h4 class="pagetitle">Archivos del Blog</h4>    
    <?php } ?>
  <div id="articles">
    <?php while (have_posts()) : the_post(); ?>
    <article class="caps"> <a href="<?php the_permalink() ?>" title="<?php the_title(); ?>">
      <?php the_post_thumbnail(array(150,150),true); ?>
      </a>
      <h2 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>">
        <?php the_title(); ?>
        </a></h2>
      <div class="entry"> <?php echo excerpt(30); ?> </div>
    </article>
    <?php endwhile; ?>
    <?php else: ?>
    <article class="post">
    	<h2>Nothing found</h2>
    </article>
  </div>
  <?php endif; ?>
  <div class="navigation">
    <div class="next-posts">
      <?php next_posts_link('&laquo; Anteriores'); ?>
    </div>
    <div class="prev-posts">
      <?php previous_posts_link('Recientes &raquo;'); ?>
    </div>
  </div>
</section>
<?php get_footer(); ?>