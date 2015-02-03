<?php 

function the_content() {

	return "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce non lacus ligula. Nunc arcu velit, ornare accumsan massa accumsan, consequat vehicula mi. Quisque cursus lacus ac mauris tristique aliquam. Morbi nec nulla tortor. Fusce eget quam a nisi dignissim egestas non et eros. Sed a elit et lorem accumsan tempus vel id nulla. Ut euismod est nec augue viverra consectetur. Nunc et nisl orci. In ornare, nulla ut rutrum tincidunt, ligula ipsum tristique elit, in efficitur tellus arcu ac ligula. Curabitur vel malesuada eros. Quisque eu lectus est. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nulla sit amet nisl sodales, dapibus arcu ac, efficitur risus. Nullam in tellus et est fringilla eleifend et sit amet ipsum. Ut neque lacus.";

}

function limit_words($string, $position, $word_limit)
{
	$words = explode(" ",$string);
	return implode(" ",array_splice($words, $position,$word_limit));
}
if (str_word_count(get_the_content()) > 120) {
	echo limit_words(get_the_content(), 0, 120) . '<span class="js-readMore"> ... Read More </span>';
	echo '<span class="u-hidden"> ' . limit_words(get_the_content(), 120, str_word_count(get_the_content())) . '</span>';
} else {
	echo the_content();
}
