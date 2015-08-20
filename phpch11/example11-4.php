<?php

	function processing_instruction($parser, $target, $code)
	{
 	    if ($target === 'php') {
		eval($code);
	    }
	}
?>
