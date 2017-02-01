<?php
//da inserire nel file function.php
//apre link su nuova scheda inizio 
function apri_in_nuova_scheda($text) {
	$return_url = str_replace('<a', '<a target="_blank" title="Apri link su nuova scheda"', $text);
	return $return_url;
}
add_filter('get_comment_author_link', 'apri_in_nuova_scheda');
add_filter('comment_text', 'apri_in_nuova_scheda');
//apre link su nuova scheda fine
?>
