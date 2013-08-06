<?php
function smarty_modifier_changecolor($string,$color='red'){
	$string="<font color='".$color."'>".$string."</font>";
	return $string;
	}