<!DOCTYPE html>

<!--[if lt IE 7 ]> <html class="ie ie6 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7 ]>    <html class="ie ie7 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8 ]>    <html class="ie ie8 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 9 ]>    <html class="ie ie9 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 9]><!--><html class="no-js" <?php language_attributes(); ?>><!--<![endif]-->
<!-- the "no-js" class is for Modernizr. -->

    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <?php if (is_search()) { ?>
    <meta name="robots" content="noindex, nofollow" />
    <?php } ?>
    <title>
    <?php
		      if (function_exists('is_tag') && is_tag()) {
		         single_tag_title("Tag Archive for &quot;"); echo '&quot; - '; }
		      elseif (is_archive()) {
		         wp_title(''); echo ' Archive - '; }
		      elseif (is_search()) {
		         echo 'Search for &quot;'.wp_specialchars($s).'&quot; - '; }
		      elseif (!(is_404()) && (is_single()) || (is_page())) {
		         wp_title(''); echo ' - '; }
		      elseif (is_404()) {
		         echo 'Not Found - '; }
		      if (is_home()) {
		         bloginfo('name'); echo ' - '; bloginfo('description'); }
		      else {
		          bloginfo('name'); }
		      if ($paged>1) {
		         echo ' - page '. $paged; }
		   ?>
    </title>
    <meta name="title" content="<?php
		      if (function_exists('is_tag') && is_tag()) {
		         single_tag_title("Tag Archive for &quot;"); echo '&quot; - '; }
		      elseif (is_archive()) {
		         wp_title(''); echo ' Archive - '; }
		      elseif (is_search()) {
		         echo 'Search for &quot;'.wp_specialchars($s).'&quot; - '; }
		      elseif (!(is_404()) && (is_single()) || (is_page())) {
		         wp_title(''); echo ' - '; }
		      elseif (is_404()) {
		         echo 'Not Found - '; }
		      if (is_home()) {
		         bloginfo('name'); echo ' - '; bloginfo('description'); }
		      else {
		          bloginfo('name'); }
		      if ($paged>1) {
		         echo ' - page '. $paged; }
		   ?>">
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta property="fb:page_id" content="385800108135908" />
    <meta property="og:title" content="Ninja Code TV" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="http://ninjacode.tv/"/>
    <meta property="og:image" content="http://ninjacode.tv/wp-content/themes/ninjacodetv-v1/_/images/ninjacodetv-icon.png" />
    <meta property="og:site_name" content="ninjacode.tv" />
    <meta property="fb:admins" content="100000248161034" />
    <link href='http://fonts.googleapis.com/css?family=Doppio+One' rel='stylesheet' type='text/css'>
    <link rel="shortcut icon" href="http://ninjacode.tv/wp-content/themes/ninjacodetv-v1/_/images/favicon.ico">
    <link rel="apple-touch-icon" href="http://ninjacode.tv/wp-content/themes/ninjacodetv-v1/_/images/apple-touch-icon.png">
    <link rel="stylesheet" href="http://ninjacode.tv/wp-content/themes/ninjacodetv-v1/style.css">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
    <!-- <script src="http://ninjacode.tv/wp-content/themes/ninjacodetv-v1/_/js/modernizr-1.7.min.js"></script> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
    <script src="http://ninjacode.tv/wp-content/themes/ninjacodetv-v1/_/js/jquery.flexslider-min.js"></script>
    
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]--><!--[if (gte IE 6)&(lte IE 8)]>
    <script src="http://ninjacode.tv/wp-content/themes/ninjacodetv-v1/_/js/selectivizr-min.js"></script>
    <script src="http://ninjacode.tv/wp-content/themes/ninjacodetv-v1/_/js/respond.min.js"></script>
    <noscript>
      <link rel="stylesheet" href="[fallback css]">
    </noscript><![endif]-->
    
    <?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
    <?php wp_head(); ?>
    <script type="text/javascript">
		jQuery(function() {
			$('.flexslider').flexslider();
		});
	</script>
    </head>
    <body <?php body_class(); ?>>
<div id="page-wrap">
    <header id="header">
          <div id="ninja">
        	<h1> 
            	<a href="http://ninjacode.tv/" title="Ninja Code TV"> 
                    <img src="http://ninjacode.tv/wp-content/themes/ninjacodetv-v1/_/images/ninjacodetv-logo-chico.jpg" id="logo-chico" alt="Ninja Code TV" width="213" height="70" /> 
                    <img src="http://ninjacode.tv/wp-content/themes/ninjacodetv-v1/_/images/ninjacodetv-logo.jpg" id="logo-grande" alt="Ninja Code TV" width="396" height="130" /> 
             	</a> 
         	</h1>
        	<div class="description">
              <?php bloginfo('description'); ?>
            </div>
      	</div>
          <nav id="menu">
            <ul>
                  <li><a href="http://ninjacode.tv/" title="">Inicio</a></li>
                  <li><a href="http://ninjacode.tv/category/proximo-capitulos" title="">Próximos Capítulos</a></li>
                  <li><a href="http://ninjacode.tv/category/capitulos-anteriores" title="">Capítulos Anteriores</a></li>
                  <li><a href="http://ninjacode.tv/contacto" title="">Contacto</a></li>
                </ul>
          </nav>
    </header>
    <section id="envivo"> <a href="http://ninjacode.tv/en-vivo" title="En vivo" id="onair" style="display:none;">On Air</a> <a href="#" title="En vivo" id="offair">Off Air</a>
      <div id="social"> 
          <a href="//www.youtube.com/subscription_center?add_user_id=Phtr0023fPD4-KQNx38rPg&feature=creators_cornier-//s.ytimg.com/yt/img/creators_corner/Subscribe_to_my_videos/YT_Subscribe_123x19_red.png"><img src="//s.ytimg.com/yt/img/creators_corner/Subscribe_to_my_videos/YT_Subscribe_123x19_red.png" alt="Suscribirse a mi canal en YouTube"/></a><img src="//www.youtube-nocookie.com/gen_204?feature=creators_cornier-//s.ytimg.com/yt/img/creators_corner/Subscribe_to_my_videos/YT_Subscribe_123x19_red.png" style="display: none"/>
        <iframe allowtransparency="true" frameborder="0" scrolling="no" src="http://platform.twitter.com/widgets/follow_button.html?screen_name=ninjacodetv&amp;lang=es" style="width:225px; height:20px;"></iframe>
        <iframe src="http://www.facebook.com/plugins/like.php?href=http://www.facebook.com/NinjaCodeTv&amp;layout=button_count&amp;show_faces=false&amp;width=100&amp;action=like&amp;font=arial&amp;colorscheme=light" scrolling="no" frameborder="0" allowTransparency="true" style="border:none; overflow:hidden; width:120px; height:20px;"></iframe>
        <g:plusone size="medium" href="http://ninjacode.tv"></g:plusone>
        <script type="text/javascript">
          window.___gcfg = {lang: 'es-419'};
          (function() {
            var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
            po.src = 'https://apis.google.com/js/plusone.js';
            var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
          })();
        </script> 
      </div>
  	</section>