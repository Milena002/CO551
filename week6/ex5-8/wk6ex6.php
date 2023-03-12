<?php
	include("myfunctions.inc");
	html_header("My second function demo");
    html_h2("My tax calculations: ");
	echo "I paid £ " . calculatetax(13000,22) . " tax.";
	html_footer();
?>
