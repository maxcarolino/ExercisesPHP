<?php

	// bring in redirected URL parameters, if any
	parse_str($_SERVER['REDIRECT_QUERY_STRING']);

	$cacheDir = "/buttons/";
	$url = $_SERVER['REDIRECT_URL'];
	
	// pick out the extension
	$extension = substr($url, strrpos($url, '.'));

	// remove directory and extension from $url string
	$file = substr($url, strlen($cacheDir), -strlen($extension));

	// security - don't allow '..' in filename
	$file = str_replace('..', '', $file);

	// text to display in button
	$text = urldecode($file);

	$font = "times";

	$path = "/tmp/buttons"; // button cache directory

	// build it, cache it, and return it
	$image = imagecreatefrompng("button.png");
	$black = imagecolorallocate($image, 0, 0, 0);

	if ($text) {
	  // calculate position of text
	  $tsize = imagettfbbox($size, 0, $font, $text);
	  $dx = abs($tsize[2] - $tsize[0]);
	  $dy = abs($tsize[5] - $tsize[3]);
	  $x = (imagesx($image) - $dx ) / 2;
	  $y = (imagesy($image) - $dy ) / 2 + $dy;

	  // draw text
	  imagettftext($image, $size, 0, $x, $y, $black, $font, $text);

	  // save image to file
	  imagepng($image, "{$_SERVER['DOCUMENT_ROOT']}{$cacheDir}{$file}.png");

	}

	header("Content-Type: image/png");
	imagepng($image);
?>
