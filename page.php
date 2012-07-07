<?php get_header(); ?>
<section id="cuerpo">
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
  <article class="post" id="post-<?php the_ID(); ?>">
    <h2>
      <?php the_title(); ?>
    </h2>
    <div class="entry">
      <?php the_content(); ?>
    </div>
    <?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
  </article>
  <?php comments_template(); ?>
  <?php endwhile; endif; ?>
</section>
<?php get_footer(); ?>
