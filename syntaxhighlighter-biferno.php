<?php
/*
Plugin Name: SyntaxHighlighter Evolved: Biferno
Plugin URI: http://www.sandrobilbeisi.org/wp/works/web-development/syntaxhighlighter-evolved-biferno/
Description: Adds support for the Biferno language to the SyntaxHighlighter Evolved plugin.
Author: Sandro Bilbeisi
Version: 1.0.1
Author URI: http://www.sandrobilbeisi.org/
License: GPLv2
based on my Biferno Brush : http://www.sandrobilbeisi.org/wp/works/web-development/biferno-javascript-brush-for-syntaxhighlighter-shbrush-js/
*/

// SyntaxHighlighter Evolved doesn't do anything until early in the "init" hook, so best to wait until after that
add_action( 'init', 'syntaxhighlighter_biferno_regscript' );

// Tell SyntaxHighlighter Evolved about this new language/brush
add_filter( 'syntaxhighlighter_brushes', 'syntaxhighlighter_biferno_addlang' );

// Register the brush file with WordPress
function syntaxhighlighter_biferno_regscript() {
	wp_register_script( 'syntaxhighlighter-brush-biferno', plugins_url('syntaxhighlighter-evolved-biferno/scripts/shBrushBiferno.js'), array('syntaxhighlighter-core'), '1.0.1');
	/*wp_register_style(  'syntaxhighlighter-theme-php5', plugins_url('syntaxhighlighter-evolved-php5/styles/shThemePHP5.css'), array('syntaxhighlighter-core'), '1.4.0');*/
}

// Filter SyntaxHighlighter Evolved's language array
function syntaxhighlighter_biferno_addlang( $brushes ) {
	$brushes['biferno'] = 'biferno';
	return $brushes;
}
?>