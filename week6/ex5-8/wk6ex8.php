<?php
	include("myfunctions.inc");
	html_header("My fourth function demo");
    html_h2("My tax calculations (with tax allowance): ");
	echo "I paid £ " . calculatetax(13000) . " tax.";
	html_footer();
?>