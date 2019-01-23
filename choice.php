<?php
/*
Plugin Name: WP Choice
Plugin URI:
Description: This plugin replaces words with your own choice of words.
Author:      Jittu
*/

/*Use this function to replace a single word*/
function choice_wordpress_typo_fix( $text ) {
	return str_replace( 'wordpress', 'WordPress', $text );
}
add_filter( 'the_content', 'choice_wordpress_typo_fix' );

/*Or use this function to replace multiple words or phrases at once*/
function choice_content_replace( $content ) {
	$search  = array( 'wordpress', 'floral', 'flower', '70', 'bouquet' );
	$replace = array( 'WordPress', 'Floral', 'Easter holidays', 'seventy', 'buffalo' );
	return str_replace( $search, $replace, $content );
}
add_filter( 'the_content', 'choice_content_replace' );

/*Use this function to add a note at the end of your content*/
function choice_content_footer_note( $content ) {
	$content .= '<footer class="choice-content-footer">Thank you</footer>';
	return $content;
}
add_filter( 'the_content', 'choice_content_footer_note' );

?>
