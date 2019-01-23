<?php
/*
Plugin Name: phrase count
Description: This plugin replaces words with your own choice of words and count words.
Author:      Jittu
*/

/*Use this function to replace a single word*/
function phrase_wordpress_typo_fix( $text ) {
	return str_replace( 'wordpress', 'WordPress', $text );
}
add_filter( 'the_content', 'phrase_wordpress_typo_fix' );

/*Or use this function to replace multiple words or phrases at once*/
function phrase_content_replace( $content ) {
	$search  = array( 'wordpress', 'floral', 'bouquet', '70', 'sensational' );
	$replace = array( 'WordPress', 'Floral', 'flowers', 'seventy', 'extraordinary' );
	return str_replace( $search, $replace, $content );
}
add_filter( 'the_content', 'phrase_content_replace' );

function word_count($a) {
$content = get_post_field( ‘post_content’, $post->ID );
$word_count = str_word_count( strip_tags( $content ) );
echo $word_count . $a;
}

function flowers_for_love($content) {
   echo '<div class="entry-meta">';
	if ( is_single() ) {
		flowers for love_posted_on();
	}
	} else {
		echo flowers for love_time_link();
		flowers for love_edit_link();
	};
echo '<div id="word-count">This post contains ' . word_count() . ' words.</div>';
echo '</div><!-- .entry-meta -->';

/*Use this function to add a note at the end of your content*/
function phrase_content_footer_note( $content ) {
	$content .= '<footer class="phrase-content-footer"></footer>';
	return $content;
}
add_filter( 'the_content', 'phrase_content_footer_note' );

?>
