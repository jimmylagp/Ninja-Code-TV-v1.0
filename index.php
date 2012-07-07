<?php get_header(); ?>

<section id="cuerpo">
  <div class="flexslider">
    <ul class="slides">
      <?php query_posts('cat=4&showposts=5&order=ASC'); ?>
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      <?php $url_img = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID),'large'); ?>
      <li style="background:url(<?php echo  $url_img[0]; ?>) no-repeat center center; float:left; margin-right:0; width:1000px;">
        <div class="content">
          <h2>
            <?php the_title(); ?>
          </h2>
          <p><?php echo excerpt(30); ?></p>
          <a href="<?php the_permalink() ?>" title="<?php the_title(); ?>">Ver ahora</a>
        </div>
      </li>
      <?php endwhile; ?>
      <?php endif; ?>
    </ul>
  </div>
  <div id="cap-ant">
    <h3>Próximos capítulos:</h3>
    <?php query_posts('cat=3&showposts=6'); ?>
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <?php $url_img = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID),'large'); ?>
    <article id="post-<?php the_ID(); ?>" style="background:url(<?php echo  $url_img[0]; ?>) no-repeat">
      <div class="capcont">
        <h2><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>">
          <?php the_title(); ?>
          </a></h2>
      </div>
    </article>
    <?php endwhile; ?>
    <?php else : ?>
    <h2>Not Found</h2>
    <?php endif; ?>
    <a href="http://ninjacode.tv/category/proximo-capitulos" title="Ver más" class="more">Ver más</a> </div>
  <div id="proxcap">
    <h3>Ultimos capítulos:</h3>
    <?php query_posts('cat=4&showposts=6&offset=5'); ?>
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <?php $url_img = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID),'large'); ?>
    <article id="post-<?php the_ID(); ?>" style="background:url(<?php echo  $url_img[0]; ?>) no-repeat">
      <div class="capcont">
        <h2><a href="<?php the_permalink() ?>">
          <?php the_title(); ?>
          </a></h2>
      </div>
    </article>
    <?php endwhile; ?>
    <?php else : ?>
    <h2>Not Found</h2>
    <?php endif; ?>
    <a href="http://ninjacode.tv/category/capitulos-anteriores" title="Ver más" class="more">Ver más</a> </div>
</section>
<?php get_footer(); ?>
