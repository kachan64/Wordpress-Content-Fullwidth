add_filter( 'body_class', 'my_neat_body_class');
function my_neat_body_class( $classes ) {
     if ( is_page('home') || is_archive('books') || is_tag('neat') )
          $classes[] = 'rightsidebar fullwidth-layout no-slider';
 
     return $classes; 
}
