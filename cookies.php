<?php
	/* --- COOKIES --- */
	//if cookies are not set by the user
	if (!isset($_COOKIE['color'])) {
		$color = '#B4D3B2';
	}
	//if cookies are set by the user
	else {
		$color = $_COOKIE['color'];
	}
?>