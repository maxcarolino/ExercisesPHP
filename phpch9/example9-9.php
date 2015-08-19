<?php

	$font = "times";
	$size = isset($_GET['size']) ? $_GET['size'] : 12;
	$text = isset($_GET['text']) ? $_GET['text'] : '';

	$path = "/tmp/buttons"; // button cache directory
	
	if ($bytes = @filesize("{$path}/{$text}.png")) {
	  header("Content-Type: image/png");
	  header("Content-Length: {$bytes}");
	  readfile("{$path}/{$text}.png");
	  exit;
	}

	// otherwise, we have to build it, cache it, and return it
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
	  imagepng($image, "{$path}/{$text}.png");
	}

	header("Content-Type: image/png");
	imagepng($image);
?>



