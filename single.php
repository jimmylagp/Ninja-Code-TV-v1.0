<?php get_header(); ?>

<section id="cuerpo">
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
  <?php if ( in_category( 'capitulos-anteriores' )) :?>
  <?php $url_img = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID),'large'); ?>
  <div class="cont_video" style="background:url(<?php echo  $url_img[0]; ?>) no-repeat"> <?php echo get_post_meta($post->ID, video, true); ?> </div>
  <?php endif; ?>
  <article <?php post_class() ?> id="post-<?php the_ID(); ?>">
    <h2 class="entry-title">
      <?php the_title(); ?>
    </h2>
    <div class="entry-content">
      <?php the_content(); ?>
      <?php wp_link_pages(array('before' => 'Pages: ', 'next_or_number' => 'number')); ?>
      <div class="tags"><?php the_tags( 'Tags: ', ', ', ''); ?></div>
      <div class="metadata"> <strong>Publicado el: </strong>
        <time datetime="<?php echo date(DATE_W3C); ?>" pubdate class="updated">
          <?php the_time('l j F Y') ?>
        </time>
        | <strong>
        <?php comments_popup_link('No hay comentarios', '1 Comentario', '% Comentario', 'comments-link', ''); ?>
        </strong> </div>
    </div>
  </article>
  <?php comments_template(); ?>
  <?php endwhile; endif; ?>
</section>
<?php get_footer(); ?>