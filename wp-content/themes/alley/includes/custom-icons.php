<?php
/*
Theme Name: Alley
Theme URI: http://wordpress.org/
Author: Adamenko Mikhail
Author URI: michailadamenko@gmail.com	
Version: 1.1 от 31.08.2013
License: GNU General Public License v2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
*/

function alley_custom_header_setup() {
 $args = array(
     'default-text-color' => '220e10',
	 'default-image'      => '%s/images/icons/icon.png',
	 
	 'height'             => 50,
	 'width'              => 50,
	 
	 'wp-head-callback'       => 'alley_header_style',
	 'admin-head-callback'    => 'alley_admin_header_style',
	 'admin-preview-callback' => 'alley_admin_header_icon',
 );
 
 add_theme_support ( 'custom-header', $args );
 
 register_default_headers( array (
     'icon' => array(
	 'url'  => '%s/images/icons/icon.png', 
	 'thumbnail_url' => '%s/images/icons/thumbnail-icon.png',
	 'description' => _x( 'Circle', 'header image description', 'alley' )
	),
	
	 'icon-c' => array(
	 'url' => '%s/images/icons/icon-c.png',
	 'thumbnail_url' => '%s/images/icons/thumbnail-icon-c.png',
	 'description' => _x( 'Icon-c', 'header image description', 'alley' )
	),
	'icon-d' => array(
	 'url' => '%s/images/icons/icon-d.png',
	 'thumbnail_url' => '%s/images/icons/thumbnail-icon-d.png',
	 'description' => _x( 'Icon-d', 'header image description', 'alley' )
	),
	'icon-e' => array(
	 'url' => '%s/images/icons/icon-e.png',
	 'thumbnail_url' => '%s/images/icons/thumbnail-icon-e.png',
	 'description' => _x( 'Icon-e', 'header image description', 'alley' )
	),
	'icon-f' => array(
	 'url' => '%s/images/icons/icon-f.png',
	 'thumbnail_url' => '%s/images/icons/thumbnail-icon-f.png',
	 'description' => _x( 'Icon-f', 'header image description', 'alley' )
	),
	'icon-g' => array(
	 'url' => '%s/images/icons/icon-g.png',
	 'thumbnail_url' => '%s/images/icons/thumbnail-icon-g.png',
	 'description' => _x( 'Icon-g', 'header image description', 'alley' )
	),
	'icon-h' => array(
	 'url' => '%s/images/icons/icon-h.png',
	 'thumbnail_url' => '%s/images/icons/thumbnail-icon-h.png',
	 'description' => _x( 'Icon-h', 'header image description', 'alley' )
	),
	'icon-j' => array(
	 'url' => '%s/images/icons/icon-j.png',
	 'thumbnail_url' => '%s/images/icons/thumbnail-icon-j.png',
	 'description' => _x( 'Icon-j', 'header image description', 'alley' )
	),
	'icon-i' => array(
	 'url' => '%s/images/icons/icon-i.png',
	 'thumbnail_url' => '%s/images/icons/thumbnail-icon-i.png',
	 'description' => _x( 'Icon-i', 'header image description', 'alley' )
	),
	'icon-a' => array(
	 'url' => '%s/images/icons/icon-a.png',
	 'thumbnail_url' => '%s/images/icons/thumbnail-icon-a.png',
	 'description' => _x( 'Icon-a', 'header image description', 'alley' )
	),
	'icon-b' => array(
	 'url' => '%s/images/icons/icon-b.png',
	 'thumbnail_url' => '%s/images/icons/thumbnail-icon-b.png',
	 'description' => _x( 'Icon-b', 'header image description', 'alley' )
	),
	'icon-u' => array(
	 'url' => '%s/images/icons/icon-u.png',
	 'thumbnail_url' => '%s/images/icons/thumbnail-icon-u.png',
	 'description' => _x( 'Icon-u', 'header image description', 'alley' )
	),
	'icon-k' => array(
	 'url' => '%s/images/icons/icon-k.png',
	 'thumbnail_url' => '%s/images/icons/thumbnail-icon-k.png',
	 'description' => _x( 'Icon-k', 'header image description', 'alley' )
	),
	'icon-j' => array(
	 'url' => '%s/images/icons/icon-j.png',
	 'thumbnail_url' => '%s/images/icons/thumbnail-icon-j.png',
	 'description' => _x( 'Icon-j', 'header image description', 'alley' )
	),
 ) );
}

add_action ('after_setup_theme', 'alley_custom_header_setup' );

add_action ('admin_print_styles_appearance_page_custom_header', 'alley_custom_header_fonts' );

function alley_header_style() {
 $header_image = get_header_image();
 $text_color   = get_header_textcolor();
 
 if ( empty ( $header_image ) && $text_color == get_theme_support( 'custom-header', 'default-text-color' ) )
  return;
  
  ?>
  <style type="text/css" id="alley-header-css">
  <?php
   if ( ! empty ( $header_image ) ) :
  ?>
    .site-header {
	        background: url(<?php header_image(); ?>)
			no-repeat scroll left;
			background-size: 50px;
			padding: 0 60px;
			max-width: 100%;
            height: auto !important;
			}
  <?php
   endif;
   
   if ( ! display_header_text() ) :
  ?>
   .site-title,
   .site-description {
    position: absolute;
	clip: rect(1px 1px 1px 1px); /* IE7 */
	clip: rect(1px, 1px, 1px, 1px);
	}
  <?php
    if ( empty( $header_image) ) :
  ?>
   .site-header .home-link {
    min-height: 0;
	
   }
  <?php
    endif;
	
	elseif ( $text_color != get_theme_support(
	'custom-header', 'default-text-color' ) ) :
  ?>
    .site-title,
	.site-description {
	 color: #<?php echo esc_attr( $text_color ); ?>;
	}
  <?php endif; ?>
  </style>
  <?php
}

function alley_admin_header_style() {
 $header_image = get_header_image();
?>
 <style type="text/css" id="alley-admin-header-css">
 .appearance_page_custom-header #headimg {
  border: none;
  -webkit-box-sizing: border-box;
  -moz-box-sizing:    border-box;
  box-sizing:         border-box;
  <?php
  if ( ! empty( $header_image ) ) {
   echo 'background: url(' . esc_url( $header_image ) . ') no-repeat scroll top; background-size:
   50px;';
} ?>
  padding: 0 20px;
}

 #headimg .home-link {  
        -webkit-box-sizing: border-box;
		-moz-box-sizing:    border-box;
		box-sizing:         border-box;
		margin: 0 auto;
		max-width: 100%;
        height: auto !important;
		
		<?php
		if ( ! empty ( $header_image ) || display_header_text () ) {
		 echo 'min-height: 50px;';
		} ?>
		width: 100%;
	}
	<?php if ( ! display_header_text() ) : ?>
	#headimg h7,
	#headimg h8 {
	 position: absolute !important;
	 clip: rect(1px 1px 1px 1px); /* IE7 */
	 clip: rect(1px, 1px, 1px, 1px);
	}
	<?php endif; ?>
	#headimg h7 {
		font: bold 10px/1 Bitter, Georgia, serif;
		margin: 0;
		padding: 58px 0 10px;
	}
	#headimg h7 a {
		text-decoration: none;
	}
	#headimg h7 a:hover {
		text-decoration: underline;
	}
	#headimg h8 {
		font: 200 italic 24px "Source Sans Pro", Helvetica, sans-serif;
		margin: 0;
		text-shadow: none;
	}
	.default-header img {
		max-width: 50px;
		width: auto;
	}
	</style>
<?php
}

function alley_admin_header_image() {
 ?>
 <div id="headimg" style="background: url (<?php header_image(); ?>) no-repeat scroll top; background-size: 50px;">
  <?php $style = 'style="color:#' . get_header_textcolor() . ';"'; ?>
  <div class="home-link">
   <h7 class="display-header-text"><a id="name"
  <?php echo $style; ?> onclick="return false;"
  href="#"><?php bloginfo ( 'name' ); ?></a></h7>
  <h8 id="desc" class="display-header-text"<?php echo $style; ?>><?php bloginfo ( 'description' ); ?></h8>
 </div>
</div>
<?php }