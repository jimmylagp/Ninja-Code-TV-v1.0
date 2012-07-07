<?php
/*
Template Name: En Vivo
*/  
get_header(); 
?>

<section id="cuerpo">
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
  <div class="cont_video" style="background:url(<?php echo  $url_img[0]; ?>) no-repeat"> <?php echo get_post_meta($post->ID, live, true); ?> </div>
  <article class="post" id="post-<?php the_ID(); ?>">
    <div id="twitter"> 
      <script charset="utf-8" src="http://widgets.twimg.com/j/2/widget.js"></script> 
      <script>
                new TWTR.Widget({
                  version: 2,
                  type: 'search',
                  search: ' to:ninjacodetv OR @ninjacodetv OR #ninjacodetv OR http://ninjacodetv OR #html5facil OR html5facil ',
                  interval: 30000,
                  title: 'Envia un Tweet',
                  subject: '#ninjacodetv',
                  width: 380,
                  height: 400,
                  theme: {
                    shell: {
                      background: '#ffffff',
                      color: '#333333'
                    },
                    tweets: {
                      background: '#ffffff',
                      color: '#000000',
                      links: '#c90000'
                    }
                  },
                  features: {
                    scrollbar: false,
                    loop: true,
                    live: true,
                    behavior: 'default'
                  }
                }).render().start();
                </script> 
    </div>
    <div id="chat">
      <iframe width="600" scrolling="no" height="400" frameborder="0" style="border: 0px none transparent;" src="http://www.ustream.tv/socialstream/8083583"></iframe>
    </div>
    <?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
  </article>
  <?php endwhile; endif; ?>
</section>
<?php get_footer(); ?>