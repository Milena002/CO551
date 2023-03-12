<?php
	include("myfunctions.inc");
	html_header("My third function demo");
    html_h2("My tax calculations: ");
	echo "I paid £ " . calculatetax(13000) . " tax.";
	html_footer();
?>
